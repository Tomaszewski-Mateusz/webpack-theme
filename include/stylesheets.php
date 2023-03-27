<?php
// register webpack compiled css with theme
function webpack_stylesheets()
{
  $theme_version = wp_get_theme()->get('Version');
  wp_enqueue_style('libs', get_template_directory_uri() . '/assets/css/libs.css', array(), $theme_version);
  wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/app.css', array(), $theme_version);
}
add_action('wp_enqueue_scripts', 'webpack_stylesheets');
