<?php
// register webpack compiled css with theme
function enqueue_webpack_stylesheets()
{
  $theme_version = wp_get_theme()->get('Version');
  wp_enqueue_style('libs', get_template_directory_uri() . '/assets/css/libs.css', array(), $theme_version, true);
  wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/app.css', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'enqueue_webpack_stylesheets');
