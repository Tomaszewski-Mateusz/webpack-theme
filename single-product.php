<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
//do_action( 'woocommerce_before_main_content' );
?>

    <section class="bannr-section" style="background-image: url(https://dummyimages.com/1920x490);">
        <div class="container">
            <div class="bannr-text">
                <?php title_with_yoast_breadcrumbs(); ?>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/assets/img/extra-images-2.png" alt="icon" class="extra-images-two">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/dots-1.png" alt="img" class="dots">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/hero-icon-1.png" alt="icon" class="hero-icon">
    </section>

<section class="gap">
    <div class="container">
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>

            <?php wc_get_template_part( 'content', 'single-product' ); ?>

        <?php endwhile; // end of the loop. ?>

    </div>
</section>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
?>

<?php
get_footer( 'alt' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
