<?php get_header(); ?>
<section class="bannr-section" style="background-image: url(https://via.placeholder.com/1920x490);">
    <div class="container">
        <div class="bannr-text">
            <h2>Shop Cart</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
            </ol>
        </div>
    </div>
    <img src="assets/img/extra-images-2.png" alt="icon" class="extra-images-two">
    <img src="assets/img/dots-1.png" alt="img" class="dots">
    <img src="assets/img/hero-icon-1.png" alt="icon" class="hero-icon">
</section>
<section class="gap">
    <div class="container">
        <form class="woocommerce-cart-form">
            <div class="row">
                <div class="col-lg-12">
                    <div style="overflow-x:auto;overflow-y: hidden;">
                        <table class="shop_table table-responsive">
                            <thead>
                            <tr>
                                <th class="product-name">Product Detail</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="product">
                                <td class="product-name">
                                    <img alt="img" src="https://via.placeholder.com/77x77">
                                    <div>
                                        <span>Amazing Grass Green Superfood</span>
                                        <p>CBD 100MG</p>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="woocommerce-Price-amount"><del><bdi><span class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></del>
                                    </span>
                                    <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi>
                                    </span>
                                </td>
                                <td class="product-quantity">
                                    <input type="number" class="input-text" value="1" min="1" >
                                </td>
                                <td class="product-subtotal">
                                    <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span>
                                </td>
                            </tr>
                            <tr class="product">
                                <td class="product-name">
                                    <img alt="img" src="https://via.placeholder.com/77x77">
                                    <div>
                                        <span>Naturecan Hemp Tea Blend  20 bags</span>
                                        <p>CBD 100MG</p>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="woocommerce-Price-amount"><del><bdi><span class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></del>
                                    </span>
                                    <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi>
                                    </span>
                                </td>
                                <td class="product-quantity">
                                    <input type="number" class="input-text" value="1" min="1" >
                                </td>
                                <td class="product-subtotal">
                                    <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span>
                                </td>
                            </tr>
                            <tr class="product">
                                <td class="product-name">
                                    <img alt="img" src="https://via.placeholder.com/77x77">
                                    <div>
                                        <span>Anti blemish facial serum</span>
                                        <p>CBD 100MG</p>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="woocommerce-Price-amount"><del><bdi><span class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></del>
                                    </span>
                                    <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi>
                                    </span>
                                </td>
                                <td class="product-quantity">
                                    <input type="number" class="input-text" value="1" min="1" >
                                </td>
                                <td class="product-subtotal">
                                    <span class="woocommerce-Price-amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="btn">Proceed To Checkout</a>
                                        <a href="#" class="btn update-cart">Update Cart</a>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="coupon-area">
                        <h3>Apply Coupon</h3>
                        <div class="coupon">
                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code">
                            <button type="submit" class="btn" name="apply_coupon"><span>Apply coupon</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cart_totals">
                        <h4>Cart Totals</h4>
                        <table class="shop_table_responsive">
                            <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal:</th>
                                <td>
                                        <span class="woocommerce-Price-amount">
                                        <bdi>
                                            <span class="woocommerce-Price-currencySymbol">$</span>250.00
                                        </bdi>
                                        </span>
                                </td>
                            </tr>
                            <tr class="Shipping">
                                <th>Shipping:</th>
                                <td>
                                        <span class="woocommerce-Price-amount amount">
                                            free
                                        </span>
                                </td>
                            </tr>
                            <tr class="Total">
                                <th>Total:</th>
                                <td>
                                        <span class="woocommerce-Price-amount">
                                        <bdi>
                                            <span>$</span>250.00
                                        </bdi>
                                        </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="#" class="btn">
                            <span>
                                Proceed to checkout
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php get_footer(); ?>
