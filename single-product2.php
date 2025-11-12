<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
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
        <div class="row">
            <div class="col-lg-6">
                <div class="product-info-img">
                    <?php woocommerce_show_product_images(); ?>
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/cbd.png" class="info-img" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <div class="d-flex align-items-center">
                        <h6><span><?php echo get_woo_stock_status_text($product->get_stock_quantity(), $product->get_stock_status()); ?></span></h6>                        <?php display_star_rating($product->get_average_rating()); ?>
                        <span>( <?= count($product->get_rating_counts()); ?> )</span>
                    </div>
                    <h2><?= $product->get_title(); ?></h2>

<?php
                    // Check if the product is indeed a Variable Product before proceeding
if ( $product->is_type( 'variable' ) ) :

    // Get product variations data (this is the JSON payload the JS uses to find prices)
    $variations_json = wp_json_encode( $product->get_available_variations() );
    $variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : $variations_json;

    // Get attributes used for variations
    $attributes = $product->get_variation_attributes();

    // The form tag MUST have the 'variations_form' class and the data-product_variations attribute
    ?>
    <form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">

        <?php if ( empty( $attributes ) && $product->is_type( 'variable' ) ) : ?>
            <p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
        <?php else : ?>

            <table class="variations" cellspacing="0">
                <tbody>
                    <?php foreach ( $attributes as $attribute_name => $options ) : ?>
                        <tr>
                            <td class="label"><label for="<?php echo sanitize_title( $attribute_name ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label></td>
                            <td class="value">
                                <?php
                                    // Renders the dropdown select field for the attribute
                                    woocommerce_dropdown_variation_attribute_options( array(
                                        'options'   => $options,
                                        'attribute' => $attribute_name,
                                        'product'   => $product,
                                    ) );

                                    // You can optionally add a "Clear" button here
                                    // echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="single_variation_wrap">
                <?php
                /**
                 * woocommerce_before_single_variation hook.
                 *
                 * @since 2.4.0
                 */
                do_action( 'woocommerce_before_single_variation' );

                /**
                 * 1. THE PRICE PLACEHOLDER (CRITICAL)
                 * This div is where WooCommerce JS inserts the dynamically calculated price.
                 * Your custom price function must NOT be used here.
                 */
                ?>
                <div class="woocommerce-variation-price"></div>

                <?php
                /**
                 * 2. THE STOCK/AVAILABILITY PLACEHOLDER
                 * This p tag is where WooCommerce JS inserts the stock status for the selected variation.
                 */
                ?>
                <div class="woocommerce-variation-availability"></div>

                <div class="woocommerce-variation-add-to-cart variations_button">
                    <?php
                        // The quantity input needs to be inside the .variations_button
                        woocommerce_quantity_input( array(
                            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(),
                        ) );
                    ?>
                    <button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                    <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
                    <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
                    <input type="hidden" name="variation_id" class="variation_id" value="0" />
                </div>

                <?php
                /**
                 * woocommerce_after_single_variation hook.
                 *
                 * @since 2.4.0
                 */
                do_action( 'woocommerce_after_single_variation' );
                ?>
            </div>
        <?php endif; ?>
    </form>
    <?php
    // The placeholder for non-selected variations (hidden by default)
    do_action( 'woocommerce_after_variations_form' );

endif; ?>

                    <h5>Strong / 4% / 30ml</h5>
                    <form class="variations_form">
                        <div class="stock">
                        <span class="price">
                            <span class="price">
                                <?= display_custom_sale_price($product->get_regular_price(), $product->get_price()); ?>
                            </span>
                        </div>
                        <div class="quantity">
                            <h6>Quantity</h6>
                            <input type="number" class="input-text" step="1" min="1" name="quantity" value="1">
                        </div>
                        <div class="wishlist">
                            <button type="submit" class="single_add_to_cart_button btn">Add to cart</button>
                        </div>
                        <ul class="product_meta">
                            <li><span class="theme-bg-clr">SKU:</span>
                                <ul class="pd-cat">
                                    <li><a href="#">Product-1-1</a><li>
                                </ul>
                            </li>
                            <li><span class="theme-bg-clr">Tags:</span>
                                <ul class="pd-tag">
                                    <li>
                                        <a href="#">featured products,</a>
                                        <a href="#">meat,</a>
                                        <a href="#">new products</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="#"><img class="pt-3" src="<?= get_template_directory_uri(); ?>/assets/img/card.png" alt="card"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gap no-top">
    <div class="container">
        <div class="tab-style nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Description</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Additional Information</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Reviews</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>
                    Nisl quam nestibulum ac quam nec odio elementu aucan ligula. Orci varius natoque pena tibus et ma urient monte nascete ridiculus mus nellente
                    sque um ac quam nec odio rbine. Nisl quam nestibulum ac quam nec odio elementu aucan ligula. Orci varius natoque pena tibus et ma urient mon
                    te nascete ridiculus mus nellentesque um ac quam nec odio rbine. Nisl quam nestibulum ac quam nec odio elementu aucan ligula. Orci varius nat
                    oque pena tibus et ma urient monte nascete ridiculus mus nellentesque um ac quam nec odio rbine. Nisl quam nestibulum ac quam nec odio ele
                    mentu aucan ligula. Orci varius natoque penac quam nec odio rbine.<br><br>

                    te nascete ridiculus mus nellentesque um ac quam nec odio rbine. Nisl quam nestibulum ac quam nec odio elementu aucan ligula. Orci varius nat
                    oque pena tibus et ma urient monte nascete ridiculus mus nellentesque um ac quam nec odio rbine. Nisl quam nestibulum ac quam nec odio ele
                    mentu aucan ligula. Orci varius natoque penac quam nec odio rbine.
                </p>
                <ul class="list-style">
                    <li>Far curiosity incommode now led smallness allowance.</li>
                    <li>Favour bed assure son things yet.</li>
                    <li>She consisted consulted elsewhere happiness</li>
                    <li>Disposing household any old the.</li>
                    <li>Widow downs you new shade drift hopes small.</li>
                    <li>Interested discretion estimating on stimulated.</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <ul class="specification">
                    <li><h6>Type </h6>Organic</li>
                    <li><h6>Dimensions</h6>24 × 1 × 2 cm</li>
                    <li><h6>Weight</h6>0.5kg, 1.5kg, 1kg, 2.5kg, 2kg, 3kg</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="comment">
                    <ul>
                        <li>
                            <img alt="girl" src="https://dummyimages.com/110x110">
                            <div class="comment-data">
                                <h4>Willimes Marko</h4>
                                <span>January 7, 2024</span>
                                <p>Integer sollicitudin ligula non enim sodales, non lacinia Sewid comm a us in euismod varius nullam feugiat ger sollicitudin ligula non en euismod varius nullam feugiat ultrices.</p>
                            </div>
                            <div class="start">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </li>
                        <li class="reply-comment">
                            <img alt="man" src="https://dummyimages.com/110x110">
                            <div class="comment-data">
                                <h4>Walkar Jamson</h4>
                                <span>January 7, 2024</span>
                                <p>Integer sollicitudin ligula non enim sodales, non lacinia Sewid comm a us in euismod varius nullam feugiat ger sollicitudin ligula non en euismod varius nullam feugiat ultrices.</p>
                            </div>
                            <div class="start">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="comment form-reviews">
                    <h3>Add Reviews</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <div class="d-flex align-items-center mb-4">
                        <span>Select Rating:</span>
                        <div class="start d-flex align-items-center ps-md-4">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <form class="leave">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="Name" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="Email Address" placeholder="Email Address">
                            </div>
                        </div>
                        <textarea placeholder="Your Message"></textarea>
                        <button class="btn mt-4 mb-lg-0 mb-5">Post Reviews</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
