<?php
/**
 * The template for displaying all single products
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<?php while ( have_posts() ) : the_post(); global $product; // Ensure $product is global ?>

    <section class="bannr-section" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);">
        <div class="container">
            <div class="bannr-text">
                <?php
                woocommerce_breadcrumb();
                the_title( '<h1 class="product_title entry-title">', '</h1>' );
                ?>
            </div>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/assets/img/extra-images-2.png" alt="icon" class="extra-images-two">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/dots-1.png" alt="img" class="dots">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/hero-icon-1.png" alt="icon" class="hero-icon">
    </section>
    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-info-img">
                        <?php
                        woocommerce_show_product_images();
                        ?>
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/cbd.png" class="info-img" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="d-flex align-items-center">
                            <?php
                            // *** THIS IS THE FIX ***
                            // Replaced the non-existent function with the correct one.
                            // We wrap it in <h6><span> to match your original design.
                            echo '<h6><span>' . wc_get_stock_html( $product ) . '</span></h6>';
                            ?>
                            <?php
                            woocommerce_template_single_rating();
                            ?>
                        </div>

                        <?php
                        woocommerce_template_single_title( '<h2>', '</h2>' );
                        ?>

                        <?php
                        woocommerce_template_single_excerpt();
                        ?>

                        <div class="stock">
                            <?php
                            woocommerce_template_single_price();
                            ?>
                        </div>

                        <h6><i class="fa-solid-fa-check"></i>Bundle Deal Available</h6> <?php
                        woocommerce_template_single_add_to_cart();
                        ?>

                        <?php
                        woocommerce_template_single_meta();
                        ?>

                        <a href="#"><img class="pt-3" src="<?= get_template_directory_uri(); ?>/assets/img/card.png" alt="card"></a> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gap no-top">
        <div class="container">
            <?php
            $product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

            if ( ! empty( $product_tabs ) ) : ?>
                <div class="tab-style nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php $i = 0; foreach ( $product_tabs as $key => $product_tab ) : $i++; ?>
                        <button class="nav-link <?php echo $i === 1 ? 'active' : ''; ?>" id="v-pills-<?php echo esc_attr( $key ); ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo esc_attr( $key ); ?>" type="button" role="tab" aria-controls="v-pills-<?php echo esc_attr( $key ); ?>" aria-selected="<?php echo $i === 1 ? 'true' : 'false'; ?>">
                            <?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <?php $i = 0; foreach ( $product_tabs as $key => $product_tab ) : $i++; ?>
                        <div class="tab-pane fade <?php echo $i === 1 ? 'show active' : ''; ?>" id="v-pills-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo esc_attr( $key ); ?>-tab">
                            <?php
                            if ( isset( $product_tab['callback'] ) ) {
                                call_user_func( $product_tab['callback'], $key, $product_tab );
                            }
                            ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>