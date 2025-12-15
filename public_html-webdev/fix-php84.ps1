# --- fix-php84.ps1 ---
param(
  [string]$root = "M:\temp\www-dev\public_html-webdev"
)

$log = Join-Path $root "php84-fix.log"
"PHP 8.4 compatibility patch started $(Get-Date)" | Out-File $log

# --- helper ---
function Backup-And-Replace {
  param($File, $Old, $New)
  $bak = "$File.bak"
  if (-not (Test-Path $bak)) { Copy-Item $File $bak -Force }
  (Get-Content $File -Raw) -replace $Old, $New | Set-Content $File -Encoding UTF8
  "Patched $File ($Old → $New)" | Out-File $log -Append
}

# 1️⃣ create_function → anonymous
Get-ChildItem $root -Recurse -Include *.php | ForEach-Object {
  $c = Get-Content $_.FullName -Raw
  if ($c -match "create_function\s*\(") {
    Backup-And-Replace $_.FullName "create_function\s*\(" "function("
  }
}

# 2️⃣ old-style constructors → __construct
Get-ChildItem $root -Recurse -Include *.php | ForEach-Object {
  $c = Get-Content $_.FullName -Raw
# 2️⃣ old-style constructors → __construct
Get-ChildItem $root -Recurse -Include *.php | ForEach-Object {
  $c = Get-Content $_.FullName -Raw
  # simpler test: function with same name as class
  if ($c -match "class\s+([A-Za-z0-9_]+)" ) {
    $classname = $Matches[1]
    if ($c -match "function\s+$classname\s*\(") {
      $pattern = "function\s+$classname\s*\("
      Backup-And-Replace $_.FullName $pattern "function __construct("
    }
  }
}
                                                                                             

}

# 3️⃣ WP_Widget subclasses
Get-ChildItem $root -Recurse -Include *.php | Where-Object {
  (Get-Content $_.FullName -Raw) -match "extends\s+WP_Widget"
} | ForEach-Object {
  $path = $_.FullName
  $content = Get-Content $path -Raw
  if ($content -notmatch "parent::__construct") {
    $fix = $content -replace "function\s+__construct\s*\(\s*\)\s*\{",
      "function __construct() {`r`n        parent::__construct('auto_widget','Auto Widget',array('description'=>'PHP 8.4 patch'));"
    $fix | Set-Content $path -Encoding UTF8
    "Added parent::__construct() to $path" | Out-File $log -Append
  }
}

# 4️⃣ Add declares for dynamic properties
Get-ChildItem $root -Recurse -Include *.php | ForEach-Object {
  $p = $_.FullName
  $c = Get-Content $p -Raw
  if ($c -match "->\w+\s*=" -and $c -notmatch "public\s+\$") {
    if ($c -match "class\s+\w+") {
      $c = $c -replace "(class\s+\w+\s*\{)", "`$1`r`n    #[\AllowDynamicProperties()]"
      $c | Set-Content $p -Encoding UTF8
      "Allowed dynamic properties in $p" | Out-File $log -Append
    }
  }
}

"PHP 8.4 patch completed $(Get-Date)" | Out-File $log -Append
Write-Host "✅ Patch complete. Review php84-fix.log for details."
