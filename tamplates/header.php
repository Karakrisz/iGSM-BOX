<!-- START HEADER AREA -->
<header class="header-area header-wrapper">
    <!-- header-top-bar -->
    <div class="header-top-bar plr-185">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 d-none d-md-block">
                    <div class="call-us">
                        <p class="mb-0 roboto">(+36) 707794867</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="top-link clearfix">
                        <ul class="link f-right">
                            <?php if ($user["loggedIn"]) : ?>
                                <li>
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>
                                        Adataim
                                    </a>
                                </li>
                                <li>
                                    <a href="/iGSM-PHP-DEMO/logout">
                                        <i class="zmdi zmdi-face"></i>
                                        Kijelentkezés
                                    </a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="/iGSM-PHP-DEMO/login">
                                        <i class="zmdi zmdi-lock"></i>
                                        Bejelentkezés
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a class="login_name"><?php esc($user["name"]) ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-area -->
    <div id="sticky-header" class="header-middle-area plr-185">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="col-lg-2 col-md-4">
                        <div class="logo">
                            <a href="/iGSM-PHP-DEMO/">
                                <img src="img/logo/logoigb.png" alt="main logo">
                            </a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li><a class="main-menu__elem__link__about-us" href="#">rólunk</a></li>
                                <li><a class="main-menu__elem__link__new-mobile" href="#">mobiltelefonok</a>
                                </li>
                                <li><a class="main-menu__elem__link__mobile-case" href="#">tokok</a> </li>
                                <li><a class="main-menu__elem__link__mobile-glass" href="#">kijelző védők</a>
                                </li>
                                <li><a class="main-menu__elem__link__special-offer" href="#">havi akció</a></li>
                                <li><a class="main-menu__elem__link__contact" href="#">kapcsolat</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header-search & total-cart -->
                    <div class="col-lg-2 col-md-8">
                        <div class="search-top-cart  f-right">
                            <!-- header-search -->
                            <div class="header-search f-left">
                                <div class="header-search-inner">
                                    <button class="search-toggle">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <form action="#">
                                        <div class="top-search-box">
                                            <input type="text" placeholder="Search here your product...">
                                            <button type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- total-cart -->
                            <div class="total-cart f-left">
                                <div class="total-cart-in">
                                    <div class="cart-toggler">
                                        <a href="#">
                                            <span class="cart-quantity">02</span><br>
                                            <span class="cart-icon">
                                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="top-cart-inner your-cart">
                                                <h5 class="text-capitalize">Your Cart</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="total-cart-pro">
                                                <!-- single-cart -->
                                                <div class="single-cart clearfix">
                                                    <div class="cart-img f-left">
                                                        <a href="#">
                                                            <img src="img/cart/1.jpg" alt="Cart Product" />
                                                        </a>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-info f-left">
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Dummy Product Name</a>
                                                        </h6>
                                                        <p>
                                                            <span>Brand <strong>:</strong></span>Brand Name
                                                        </p>
                                                        <p>
                                                            <span>Model <strong>:</strong></span>Grand s2
                                                        </p>
                                                        <p>
                                                            <span>Color <strong>:</strong></span>Black, White
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- single-cart -->
                                                <div class="single-cart clearfix">
                                                    <div class="cart-img f-left">
                                                        <a href="#">
                                                            <img src="img/cart/1.jpg" alt="Cart Product" />
                                                        </a>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-info f-left">
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Dummy Product Name</a>
                                                        </h6>
                                                        <p>
                                                            <span>Brand <strong>:</strong></span>Brand Name
                                                        </p>
                                                        <p>
                                                            <span>Model <strong>:</strong></span>Grand s2
                                                        </p>
                                                        <p>
                                                            <span>Color <strong>:</strong></span>Black, White
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner subtotal">
                                                <h4 class="text-uppercase g-font-2">
                                                    Total =
                                                    <span>$ 500.00</span>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner view-cart">
                                                <h4 class="text-uppercase">
                                                    <a href="#">View cart</a>
                                                </h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="top-cart-inner check-out">
                                                <h4 class="text-uppercase">
                                                    <a href="#">Check out</a>
                                                </h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER AREA -->
<!-- START MOBILE MENU AREA -->
<div class="mobile-menu-area d-block d-lg-none section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a class="main-menu__elem__link__about-us" href="#">rólunk</a></li>
                            <li><a class="main-menu__elem__link__new-mobile" href="#">mobiltelefonok</a>
                            </li>
                            <li><a class="main-menu__elem__link__mobile-case" href="#">tokok</a> </li>
                            <li><a class="main-menu__elem__link__mobile-glass" href="#">kijelző védők</a>
                            </li>
                            <li><a class="main-menu__elem__link__special-offer" href="#">havi akció</a></li>
                            <li><a class="main-menu__elem__link__contact" href="#">kapcsolat</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MOBILE MENU AREA -->