<?php

// add thumbnails

add_theme_support('post-thumbnails');

// acf-disable-trash
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

// thumbTrigger

function fetchThumb($size, $class = '', $link)
{
        if($link !== null) {
            $link = get_template_directory_uri() . $link;
        } else {
            $link = 'https://via.placeholder.com/768'
        }
    $dir = get_template_directory_uri();
    if ($class && has_post_thumbnail()) {
        the_post_thumbnail($size, array('class' => "$class"));
    } elseif (has_post_thumbnail()) {
        the_post_thumbnail($size);
    } else {
        echo "<img class='$class' src='$link' alt='placeholder'>";
    }
}

// init ACF options

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Ustawienia motywu',
        'menu_title'    => 'Ustawienia motywu',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Social Links',
        'menu_title'    => 'social links',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// ACF trigger functions

function triggerField($arg, $placeholder = 'no field')
{
    if ($arg) {
        echo $arg;
    } else {
        echo $placeholder;
    }
}
function triggerFieldUrl($arg, $url = '')
{
    if ($arg) {
        echo $arg;
    } elseif ($url !== '') {
        echo get_template_directory_uri() . $url;
    } else {
        echo "https://via.placeholder.com/768";
    }
}

// init breadcrumbs

function breadcrumbs()
{
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="acf-block"><p class="head-3 link-theme--forced" id="breadcrumbs"', '</p></div>');
    }
}

// init cpt

function test_post_type()
{
    $args = array(
        'label'  => 'test',
        'rewrite' => array(
            'slug' => 'opinie'
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
    );
    register_post_type('test', $args);
}
add_action('init', 'test_post_type');

// Allow webp support

function WebP_is_displayable($result, $path)
{
    if ($result === false) {
        $displayable_image_types = array(IMAGETYPE_WebP);
        $info = @getimagesize($path);
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
    return $result;
}
add_filter('file_is_displayable_image', 'WebP_is_displayable', 10, 2);

// Allow SVG support

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

function tag_manager()
{
    if (has_term('nowosc', 'tagi')) {
        return "card--new-product";
    }
    if (has_term('archiwum', 'tagi')) {
        return "card--archive-product";
    }
}
