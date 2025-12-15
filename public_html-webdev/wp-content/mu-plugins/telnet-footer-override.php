<?php
/*
Plugin Name: Telnet Footer Override (v2)
Description: Forces centered copyright & removes vendor credit regardless of Redux/global timing.
Author: Telnet, Inc.
Version: 1.1.0
*/

/**
 * 1) Ensure get_option('themeum_options') returns our values.
 */
add_filter('option_themeum_options', function ($opt) {
    if (!is_array($opt)) { $opt = []; }
    $opt['copyright-en']  = 1;
    $opt['copyright-text'] =
        '<p style="margin:0; color:#fff; text-align:center;">&copy; '.date('Y').' Telnet, Inc. All Rights Reserved.</p>';
    return $opt;
}, 1);

/**
 * 2) Also override the global $themeum_options that the theme reads directly.
 *    We set it early and again after the theme sets up, to cover both timings.
 */
function telnet_set_footer_globals() {
    global $themeum_options;
    if (!is_array($themeum_options)) { $themeum_options = []; }
    $themeum_options['copyright-en'] = 1;
    $themeum_options['copyright-text'] =
        '<p style="margin:0; color:#fff; text-align:center;">&copy; '.date('Y').' Telnet, Inc. All Rights Reserved.</p>';
}
add_action('muplugins_loaded', 'telnet_set_footer_globals', 0);
add_action('after_setup_theme', 'telnet_set_footer_globals', 0);

/**
 * 3) Safety CSS to hide any right-side credit & center the block.
 */
add_action('wp_head', function () {
    echo '<style>
/* bring back the dark footer bar */
footer#footer, #footer { background:#333 !important; padding:16px 0 !important; }
/* make sure the text is white and centered */
footer#footer, #footer, #footer * { color:#fff !important; }
#footer .pull-right{ display:none !important; }
#footer .pull-left{ float:none !important; width:100% !important; text-align:center !important; }
</style>';
}, 999);  // run late so it overrides theme CSS
