<?php get_header(); ?>
<section class="bannr-section" style="background-image: url(https://via.placeholder.com/1920x490);">
    <div class="container">
        <div class="bannr-text">
            <h2>Checkout</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">shop</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </div>
    <img src="assets/img/extra-images-2.png" alt="icon" class="extra-images-two">
    <img src="assets/img/dots-1.png" alt="img" class="dots">
    <img src="assets/img/hero-icon-1.png" alt="icon" class="hero-icon">
</section>
<section class="gap">
    <div class="container">
        <form class="checkout-meta donate-page">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="pb-3">Billing details</h3>
                    <div class="col-lg-12">
                        <input type="text" class="input-text " name="billing_name" placeholder="Complete Name">
                        <input type="email" class="input-text " name="billing_email" placeholder="Email address">
                        <select name="billing_country" class="nice-select Advice country_to_state">
                            <option>Country</option>
                            <option>Select Topic 1</option>
                            <option>Select Topic 2</option>
                            <option>Select Topic 3</option>
                            <option>Select Topic 4</option>
                        </select>
                        <div class="row">
                            <div class="col-lg-6">
                                <select name="billing_country" class="nice-select Advice city">
                                    <option>City</option>
                                    <option>Select Topic 1</option>
                                    <option>Select Topic 2</option>
                                    <option>Select Topic 3</option>
                                    <option>Select Topic 4</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select name="billing_country" class="nice-select Advice state province">
                                    <option>State / Province</option>
                                    <option>Select Topic 1</option>
                                    <option>Select Topic 2</option>
                                    <option>Select Topic 3</option>
                                    <option>Select Topic 4</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="Postal_Code" placeholder="Postal Code">
                            </div>
                            <div class="col-lg-6">
                                <input type="tel" class="input-text " name="billing_phone"  placeholder="Phone">
                            </div>
                        </div>
                        <input type="text" name="Address" placeholder="Address">
                        <div class="ship-address">
                            <div class="d-flex">
                                <input type="radio" id="Create" name="Create" value="Create">
                                <label for="Create">
                                    Create an account for later use
                                </label>
                            </div>
                            <div class="d-flex">
                                <input type="radio" id="ShipAddress" name="Create" value="ShipAddress">
                                <label for="ShipAddress">
                                    Deliver to same Address
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="woocommerce-additional-fields">
                        <textarea name="order_comments" class="input-text " placeholder="Order Note"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart_totals-checkout" style="background-image: url(assets/img/cbd-oil.jpg);">
                        <div class="cart_totals cart-Total">
                            <h4 class="pt-0">Cart Total</h4>
                            <table class="shop_table_responsive">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal:</th>
                                    <td>
                                                <span class="woocommerce-Price-amount">
                                                <bdi>
                                                    <span class="woocommerce-Price-currencySymbol">$</span>358.00
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
                                                    <span>$</span>358.00
                                                </bdi>
                                                </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="checkout-side">
                            <h4>Payment Method</h4>
                            <ul>
                                <li>
                                    <input type="radio" id="Bank_Payment" name="Bank_Payment" value="Bank_Payment">
                                    <label for="Bank_Payment">
                                        Bank Payment
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="Check_Payment" name="Bank_Payment" value="Check_Payment">
                                    <label for="Check_Payment">
                                        Check Payment
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="PayPal" name="Bank_Payment" value="Check_Payment">
                                    <label for="PayPal">
                                        PayPal
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="cash-on-celivery" name="Bank_Payment" value="Check_Payment">
                                    <label for="cash-on-delivery">Cash on Delivery</label>
                                </li>
                            </ul>
                            <button type="submit" class="btn"><span>Place Order</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php get_footer(); ?>
