<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= get_the_title() ?> | <?= get_bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="preloader">
    <div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

<header class="two">
    <div class="bottom-bar">
        <div class="container">
            <div class="two-bar">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="<?= get_home_url(); ?>">
                            <img alt="logo" src="<?= get_template_directory_uri(); ?>/assets/img/logo-drak.png">
                        </a>
                    </div>
                </div>
                <div class="bar-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <?php
                wp_nav_menu( array(
                        'theme_location'  => 'primary_menu',           // Matches our registered location
                        'container'       => 'nav',                    // Creates the <nav> wrapper
                        'container_class' => 'navbar',                 // Adds class="navbar" to the <nav>
                        'menu_class'      => 'navbar-links',           // Adds class="navbar-links" to the <ul>
                        'fallback_cb'     => false,                    // Don't show a fallback menu
                        'depth'           => 2,                        // Assumes 2 levels (main items + dropdown)
                ) );
                ?>
                <div class="header-search">
                    <div class="header-search-button search-box-outer">
                        <a href="javascript:void(0)" class="search-btn">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <g data-name="12">
                                    <path
                                            d="m21.71 20.29-2.83-2.82a9.52 9.52 0 1 0 -1.41 1.41l2.82 2.83a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zm-17.71-8.79a7.5 7.5 0 1 1 7.5 7.5 7.5 7.5 0 0 1 -7.5-7.5z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="user"><i><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-325.914062 354.316406c8.453125-72.734375 70.988281-128.890625 144.894531-128.890625 38.960938 0 75.597656 15.179688 103.15625 42.734375 23.28125 23.285156 37.964844 53.6875 41.742188 86.152344-39.257813 32.878906-89.804688 52.707031-144.898438 52.707031s-105.636719-19.824219-144.894531-52.703125zm144.894531-159.789063c-42.871094 0-77.753906-34.882812-77.753906-77.753906 0-42.875 34.882812-77.753906 77.753906-77.753906s77.753906 34.878906 77.753906 77.753906c0 42.871094-34.882812 77.753906-77.753906 77.753906zm170.71875 134.425782c-7.644531-30.820313-23.585938-59.238282-46.351562-82.003906-18.4375-18.4375-40.25-32.269532-64.039063-40.9375 28.597656-19.394532 47.425781-52.160157 47.425781-89.238282 0-59.414062-48.339844-107.753906-107.753906-107.753906s-107.753906 48.339844-107.753906 107.753906c0 37.097656 18.84375 69.875 47.464844 89.265625-21.886719 7.976563-42.140626 20.308594-59.566407 36.542969-25.234375 23.5-42.757812 53.464844-50.882812 86.347656-34.410157-39.667968-55.261719-91.398437-55.261719-147.910156 0-124.617188 101.382812-226 226-226s226 101.382812 226 226c0 56.523438-20.859375 108.265625-55.28125 147.933594zm0 0" />
                            </svg></i></a>
                    <div class="donation">

                        <a href="JavaScript:void(0)" class="pr-cart">
                            <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                            d="m337.034 420.796c.835.139 1.665.207 2.484.207 7.2 0 13.555-5.2 14.778-12.537l15-90c1.362-8.171-4.158-15.9-12.33-17.262-8.172-1.366-15.9 4.158-17.262 12.33l-15 90c-1.362 8.172 4.158 15.901 12.33 17.262z" />
                                    <path
                                            d="m158.704 408.466c1.223 7.337 7.577 12.537 14.778 12.537.819 0 1.649-.067 2.484-.207 8.172-1.362 13.692-9.09 12.33-17.262l-15-90c-1.362-8.172-9.089-13.691-17.262-12.33-8.172 1.362-13.692 9.09-12.33 17.262z" />
                                    <path
                                            d="m497 181h-52.791l-115.496-144.37c-5.174-6.467-14.613-7.518-21.083-2.342-6.469 5.175-7.518 14.614-2.342 21.083l100.503 125.629h-299.582l100.504-125.629c5.175-6.469 4.126-15.909-2.342-21.083-6.47-5.176-15.909-4.126-21.083 2.342l-115.497 144.37h-52.791c-8.284 0-15 6.716-15 15v60c0 8.284 6.716 15 15 15h18.686l56.892 199.121c1.839 6.44 7.725 10.879 14.422 10.879h302c6.697 0 12.583-4.439 14.423-10.879l56.891-199.121h18.686c8.284 0 15-6.716 15-15v-60c0-8.284-6.716-15-15-15zm-101.314 270h-279.372l-51.428-180h382.229zm86.314-210c-51.385 0-403.32 0-452 0v-30h452z" />
                                    <path
                                            d="m256 421c8.284 0 15-6.716 15-15v-90c0-8.284-6.716-15-15-15s-15 6.716-15 15v90c0 8.285 6.716 15 15 15z" />
                                </g>
                            </svg>



                        </a>

                        <div class="cart-popup">

                            <ul>

                                <li class="d-flex align-items-center position-relative">

                                    <div class="p-img light-bg">

                                        <img alt="img" src="https://dummyimage.com/100x100">

                                    </div>

                                    <div class="p-data">

                                        <h3 class="font-semi-bold">Anti blemish facial serum</h3>

                                        <p class="theme-clr font-semi-bold">1 x $25.00</p>

                                    </div>

                                    <a href="JavaScript:void(0)" id="crosss"></a>

                                </li>

                                <li class="d-flex align-items-center position-relative">

                                    <div class="p-img light-bg">

                                        <img alt="img" src="https://dummyimage.com/100x100">

                                    </div>

                                    <div class="p-data">

                                        <h3 class="font-semi-bold">Anti blemish facial serum</h3>

                                        <p class="theme-clr font-semi-bold">1 x $25.00</p>

                                    </div>

                                    <a href="JavaScript:void(0)" id="cross"></a>

                                </li>

                            </ul>

                            <div class="cart-total d-flex align-items-center justify-content-between">

                                <span class="font-semi-bold">Total:</span>

                                <span class="font-semi-bold">$60.00</span>

                            </div>

                            <div class="cart-btns d-flex align-items-center justify-content-between">

                                <a class="font-bold" href="JavaScript:void">View Cart</a>

                                <a class="font-bold theme-bg-clr text-white checkout"
                                   href="JavaScript:void">Checkout</a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
        <div class="res-log">
            <a href="index.html">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="Responsive Logo" class="white-logo">
            </a>
        </div>
        <?php
        wp_nav_menu( array(
                'theme_location'  => 'primary_menu',           // Matches our registered location
                'container'       => false,                    // Creates the <nav> wrapper
                'container_class' => false,                 // Adds class="navbar" to the <nav>
                'menu_class'      => false,           // Adds class="navbar-links" to the <ul>
                'fallback_cb'     => false,                    // Don't show a fallback menu
                'depth'           => 2,                        // Assumes 2 levels (main items + dropdown)
        ) );
        ?>
        <a href="JavaScript:void(0)" id="res-cross"></a>
    </div>
</header>

