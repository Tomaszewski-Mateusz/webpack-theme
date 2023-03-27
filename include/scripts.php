<?php
// register webpack compiled js with theme
function webpack_scripts()
{
  $theme_version = wp_get_theme()->get('Version');
  wp_enqueue_script('libs-js', get_template_directory_uri() . '/assets/js/libs.bundle.js', array(), $theme_version, true);
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/app.bundle.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'webpack_scripts');
