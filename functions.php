<?php


/**
 * Theme Assets Enqueue Functions
 *
 * This file contains functions to properly enqueue CSS stylesheets
 * and JavaScript files for a WordPress theme, optimized for WP 6.8+.
 *
 * NOTE: The 'jquery' script is now enqueued using the core WordPress
 * library handle, and is set to load in the <head> (in_footer = false),
 * along with the 'preloader' script, as requested.
 */

// --- Stylesheets ---

function theme_stylesheets()
{
    // Get the theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');

    // All stylesheets remain correctly loaded (order matters less for CSS)
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $theme_version);
    wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), $theme_version);
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), $theme_version);
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), $theme_version);
    wp_enqueue_style('jquery-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), $theme_version);
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), $theme_version);
    wp_enqueue_style('splitting', get_template_directory_uri() . '/assets/css/splitting.css', array(), $theme_version);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), $theme_version);

    // Theme specific styles
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'theme_stylesheets');

// --- Scripts ---

function theme_scripts()
{
    // Get the theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');

    /**
     * SCRIPT 1: jQuery (Loaded in Header)
     * Use the core handle 'jquery' and set $src to false.
     * The $in_footer argument is set to false to ensure it loads in the <head>.
     */
    wp_enqueue_script('jquery', null, array(), $theme_version, false);
    /**
     * SCRIPT 2: Preloader (Loaded in Header)
     * The $in_footer argument is set to false to ensure it loads in the <head>.
     */
    wp_enqueue_script('preloader', get_template_directory_uri() . '/assets/js/preloader.js', array(), $theme_version, false);

    /**
     * DEPENDENT SCRIPTS (Loaded in Footer)
     * These scripts are set to load in the footer (true), but they
     * all list 'jquery' as a dependency (third argument) to ensure
     * they load *after* jQuery is available in the header.
     */
    $deps = array('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', $deps, $theme_version, true);
    wp_enqueue_script('jquery-nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', $deps, $theme_version, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', $deps, $theme_version, true);

    // Splitting.js is often vanilla JS, but we'll check if it relies on jQuery. If not, no dependency is needed.
    wp_enqueue_script('splitting', get_template_directory_uri() . '/assets/js/splitting.js', array(), $theme_version, true);

    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', $deps, $theme_version, true);
    wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', $deps, $theme_version, true);

    // Custom script should load after all libraries it uses
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', $deps, $theme_version, true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');

function my_theme_register_nav_menu() {
    register_nav_menus( array(
        'primary_menu' => esc_html__( 'Primary Menu', 'my-theme-text-domain' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_register_nav_menu' );

function title_with_yoast_breadcrumbs() {
    echo '<h2>' . get_the_title() . '</h2>';
    echo '<div class="breadcrumb">';
    echo  yoast_breadcrumb( '','', false );;
    echo '</div>';
}


/**
 * Outputs the FontAwesome star icons based on the average rating.
 *
 * @param float $average_rating The numerical average rating (e.g., 4.3).
 * @param int $max_stars The total number of stars to display (default is 5).
 * @return void Echos the HTML output directly.
 */
function display_star_rating($average_rating, $max_stars = 5)
{
    // 1. Calculate the number of full stars (whole number)
    $full_stars = floor($average_rating);

    // 2. Calculate the number of half stars (optional refinement)
    // We check if the decimal part is 0.5 or greater to show a half star.
    $has_half_star = ($average_rating - $full_stars) >= 0.5;

    // 3. Calculate the number of empty stars
    $total_stars_used = $full_stars + ($has_half_star ? 1 : 0);
    $empty_stars = $max_stars - $total_stars_used;

    // Start the container div
    echo '<div class="start d-flex align-items-center">';

    // Output Full Stars
    for ($i = 0; $i < $full_stars; $i++) {
        // Class for a filled star
        echo '<i class="fa-solid fa-star"></i>';
    }

    // Output Half Star (if applicable)
    if ($has_half_star) {
        // Use fa-solid fa-star-half-stroke for a clearer half-star icon
        echo '<i class="fa-solid fa-star-half-stroke"></i>';
    }

    // Output Empty Stars
    for ($i = 0; $i < $empty_stars; $i++) {
        // Use fa-regular fa-star for an empty outline star
        echo '<i class="fa-regular fa-star"></i>';
    }

    // Close the container div
    echo '</div>';
}

/**
 * Returns a localized stock status string (Dostępny/Niedostępny)
 * based on the WooCommerce stock status, including the quantity.
 *
 * @param int $stock_quantity The product's stock quantity.
 * @param string $stock_status The product's stock status ('instock', 'outofstock', 'onbackorder').
 * @return string The formatted stock status string.
 */
function get_woo_stock_status_text($stock_quantity, $stock_status) {
    $status_text = '';

    // Determine the localized status text based on the WooCommerce status key
    switch ($stock_status) {
        case 'instock':
            $status_text = 'Dostępny';
            break;
        case 'outofstock':
            $status_text = 'Niedostępny';
            break;
        case 'onbackorder':
            // You might want a specific term for backorder, e.g., 'Na zamówienie'
            $status_text = 'Dostępny (Na zamówienie)';
            // Note: If on backorder, you might still want to show the quantity if it's high,
            // or just the status if the quantity is 0. Let's return the status without (0) if 0.
            if ((int) $stock_quantity === 0) {
                return $status_text; // Return 'Dostępny (Na zamówienie)' without the (0)
            }
            break;
        default:
            // Fallback for any other status
            $status_text = 'Status nieznany';
    }

    // Append the quantity in parentheses, unless the status is 'outofstock' and quantity is 0
    if ($stock_status === 'outofstock' && (int) $stock_quantity === 0) {
        // For 'outofstock' and 0 quantity, just return 'Niedostępny (0)'
        return $status_text . ' (' . $stock_quantity . ')';
    }

    // For all other cases, append the quantity
    return $status_text . ' (' . $stock_quantity . ')';
}

/**
 * Generates the HTML for a custom WooCommerce price display,
 * showing regular price crossed out and the current price.
 *
 * @param float|string $regular_price The product's regular (pre-sale) price.
 * @param float|string $current_price The product's current price (after discounts/sale).
 * @return string The formatted HTML price string.
 */
function display_custom_sale_price($regular_price, $current_price) {
    // Safety check: ensure required WooCommerce functions exist
    if (!function_exists('get_woocommerce_currency_symbol') || !function_exists('wc_get_price_decimals')) {
        return '<!-- WooCommerce not active or function missing -->';
    }

    $currency_symbol = get_woocommerce_currency_symbol();
    $decimals = wc_get_price_decimals();
    $output_html = '';

    // Convert to float for accurate comparison
    $regular = floatval($regular_price);
    $current = floatval($current_price);

    // Helper function to format the price block HTML
    $format_price_block = function($price, $is_sale) use ($currency_symbol, $decimals) {
        $class = 'woocommerce-Price-amount amount';
        $price_formatted = number_format($price, $decimals);

        $html = '<span class="' . $class . '">';
        $html .= '<bdi>';
        // Output currency symbol and formatted price
        $html .= '<span class="woocommerce-Price-currencySymbol">' . $currency_symbol . '</span>' . $price_formatted;
        $html .= '</bdi>';
        $html .= '</span>';
        return $html;
    };

    // 1. Check if the product is on sale (current price is less than regular price)
    if ($current > 0 && $current < $regular) {
        // --- SALE PRICE HTML (DEL/INS) ---

        // Regular Price (Deleted)
        $output_html .= '<del>';
        $output_html .= $format_price_block($regular, false);
        $output_html .= '</del>';

        // Current Price (Inserted/Sale)
        $output_html .= '<ins>';
        $output_html .= $format_price_block($current, true);
        $output_html .= '</ins>';

    } else {
        // --- REGULAR (NON-SALE) PRICE HTML ---

        // If not on sale, just display the current price
        $output_html .= $format_price_block($current, false);
    }

    return $output_html;
}