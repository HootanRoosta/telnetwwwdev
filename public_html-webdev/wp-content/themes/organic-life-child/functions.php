<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('organic-life-parent-style', get_template_directory_uri() . '/style.css', [], null);
});