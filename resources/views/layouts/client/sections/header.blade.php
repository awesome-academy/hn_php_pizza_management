<header id="masthead" class="site-header header-v1" style="background-image: none; ">
    <div class="col-full">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="header-wrap">
            <div class="site-branding">
                <a href="index.html">
                    <img width="100" src="{{ asset('bower_components/client-pizza/assets/images/sidebar-about-2.png') }}" alt="">
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
                <div class="primary-navigation">
                    <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                        <li class="menu-item"><a href="shop-grid-3-column.html">{{ __('client.header.home') }}</a></li>
                        <li class="yamm-fw menu-item menu-item-has-children">
                            <a href="about.html">Pizza</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <div class="yamm-content">
                                        <div class="kc-wrap-columns">
                                            <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3">
                                                <div class="kc-col-container">
                                                    <div class="widget widget_nav_menu kc-elm kc-css-1908114">
                                                        <div class="menu-pages-menu-1-container">
                                                            <ul id="menu-pages-menu-5" class="menu">
                                                                <li class="menu-item"><a href="index.html">Seafood Pizza</a></li>
                                                                <li class="menu-item"><a href="home-v2.html">Pizza Meat</a></li>
                                                                <li class="menu-item"><a href="home-v3.html">Vegetable Pizza</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">{{ __('client.header.contact') }}</a></li>
                        <li class="menu-item"><a href="#">{{ __('client.header.login') }}</a></li>
                    </ul>
                </div>
                <div class="handheld-navigation">
                    <span class="phm-close">Close</span>
                    <ul class="menu">
                        <li class="menu-item "><a href="#"><i class="po po-pizza"></i>Pizza</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-burger"></i>Burgers</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-salads"></i>Salads</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-tacos"></i>Tacos</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-wraps"></i>Wraps</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-fries"></i>Fries</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-salads"></i>Salads</a></li>
                        <li class="menu-item "><a href="#"><i class="po po-drinks"></i>Drinks</a></li>
                    </ul>
                </div>
            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">

                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a href="cart.html" title="View your shopping cart">
                        <i class="po po-scooter"></i>
                        <span>{{ __('client.header.go_to_cart') }}</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="cart.html" title="View your shopping cart">
                                <span class="count">2 items</span> <span class="amount">$50.00</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pizzaro-secondary-navigation">
            <nav class="secondary-navigation" aria-label="Secondary Navigation">
                <ul class="menu">
                    <li class="menu-item"><a href="#"><i class="po po-pizza"></i>Pizza</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-burger"></i>Burgers</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-salads"></i>Salads</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-tacos"></i>Tacos</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-wraps"></i>Wraps</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-fries"></i>Fries</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-salads"></i>Salads</a></li>
                    <li class="menu-item"><a href="#"><i class="po po-drinks"></i>Drinks</a></li>
                </ul>
            </nav>
            <!-- #secondary-navigation -->
        </div>
    </div>
</header>
