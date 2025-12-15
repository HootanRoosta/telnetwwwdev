<?php
global $themeum_options, $themeum;
?>
<footer id="footer" style="background:#333; text-align:center; padding:15px 0;">
  <div class="container">
    <div class="footer">
      <div class="copyright">
        <div class="row">
          <div class="col-sm-12">
            <p style="color:#fff; margin:0; font-size:14px;">&copy; <?php echo date('Y'); ?> Telnet, Inc. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php if(isset($themeum['before_body']))  echo $themeum['before_body']; ?>
<?php if(isset($themeum_options['google-analytics'])) echo $themeum_options['google-analytics']; ?>
<?php wp_footer(); ?>
</body>
</html>