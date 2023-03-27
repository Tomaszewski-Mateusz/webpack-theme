<?php
// register webpack compiled js with theme
function enqueue_webpack_scripts()
{
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_script('libs', get_template_directory_uri() . '/assets/css/libs.css', array(), $theme_version, true);
  wp_enqueue_script('theme', get_template_directory_uri() . '/assets/css/app.css', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'enqueue_webpack_scripts');
