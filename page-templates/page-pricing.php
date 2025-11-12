<?php
/*
Template Name: Subpage: Cennik
Template Post Type: page
*/
get_header(); ?>
<?php get_template_part('template-parts/subpage', 'header'); ?>
<section class="section-pricing-plans gap" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-text">
                    <figure>
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/cosmetics.svg" alt="img">
                    </figure>
                    <h3>Basic Plan</h3>
                    <h2>$240<span>/ 4 month PACK</span></h2>
                    <ul>
                        <li><i class="fa-solid fa-check"></i>Save 20% Every Month</li>
                        <li><i class="fa-solid fa-check"></i>Cancel or Skip a month</li>
                        <li><i class="fa-solid fa-check"></i>Free delivery every month</li>
                        <li><i class="fa-solid fa-check"></i>Free Consultation</li>
                    </ul>
                    <a href="#">Purchase Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-text two" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/cbd-oil.jpg);">
                    <figure>
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/cosmetics.svg" alt="img">
                    </figure>
                    <h3>Basic Plan</h3>
                    <h2>$240<span>/ 4 month PACK</span></h2>
                    <ul>
                        <li><i class="fa-solid fa-check"></i>Save 20% Every Month</li>
                        <li><i class="fa-solid fa-check"></i>Cancel or Skip a month</li>
                        <li><i class="fa-solid fa-check"></i>Free delivery every month</li>
                        <li><i class="fa-solid fa-check"></i>Free Consultation</li>
                    </ul>
                    <a href="#">Purchase Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-text mb-0">
                    <figure>
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/cosmetics.svg" alt="img">
                    </figure>
                    <h3>Basic Plan</h3>
                    <h2>$240<span>/ 4 month PACK</span></h2>
                    <ul>
                        <li><i class="fa-solid fa-check"></i>Save 20% Every Month</li>
                        <li><i class="fa-solid fa-check"></i>Cancel or Skip a month</li>
                        <li><i class="fa-solid fa-check"></i>Free delivery every month</li>
                        <li><i class="fa-solid fa-check"></i>Free Consultation</li>
                    </ul>
                    <a href="#">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= get_template_directory_uri(); ?>/assets/img/extra-images-2.png" alt="icon" class="extra-images-two">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/dots-1.png" alt="icon" class="dots">
</section>
<section>
    <div class="container">
        <div class="gummies m-0">
            <div class="video two">
                <a data-fancybox="" href="https://www.youtube.com/watch?v=xKxrkht7CpY">
                    <i>
                        <svg width="11" height="17" viewBox="0 0 11 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 8.49951L0.5 0.27227L0.5 16.7268L11 8.49951Z" fill="#000"></path>
                        </svg>
                    </i>
                </a>
                <img src="https://dummyimage.com/510x430" alt="img">
            </div>
            <div class="gummies-text">
                <div class="heading two ">
                    <h6 >Shop 30% off Nutriburst This May.</h6>
                    <h2 >30% off Nutriburst Gummies!</h2>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <form>
                    <input type="text" name="coupon" placeholder="coupon code">
                    <button class="btn">Click to Copy</button>
                </form>
                <h5>Try the Bestseller.<span> Nutriburst Healt and Vitality Gummies</span></h5>
                <img alt="img" src="<?= get_template_directory_uri(); ?>/assets/img/flower-icon.png" class="flower-icon">
            </div>
        </div>
    </div>
</section>
<section class="section-provide-high gap">
    <div class="container">
        <div class="heading two ">
            <h6 >Welcome TO Conbiz</h6>
            <h2 >We provide high quality and certified products</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="provide-high-text">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout.The point of using. It is a long established fact that a
                        reader will be distracted.</p>
                    <ul>
                        <li><i class="fa-solid fa-check"></i>Unrivalled quality standards</li>
                        <li><i class="fa-solid fa-check"></i>Third party laboratory tests, available to view</li>
                        <li><i class="fa-solid fa-check"></i>Extraction methods that guarantee the highest quality
                            CBD</li>
                    </ul>
                    <a href="#">Discover our quality assurance</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="provide-high-img">
                    <img src="https://dummyimage.com/428x222" alt="img" class="provide-high-one">
                    <img src="https://dummyimage.com/541x282" alt="img" class="provide-high-two">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/dots.png" alt="dots" class="dots">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/hero-icon-1.png" alt="icon" class="hero-icon">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>