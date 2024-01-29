<?php

// add thumbnails

add_theme_support('post-thumbnails');

// acf-disable-trash
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

// init ACF options

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Motyw',
        'menu_title'    => 'Motyw',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// init breadcrumbs

function breadcrumbs()
{
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="acf-block"><p class="head-3 link-theme--forced" id="breadcrumbs"', '</p></div>');
    }
}