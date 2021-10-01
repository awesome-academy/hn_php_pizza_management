<header id="masthead" class="site-header header-v1" style="background-image: none; ">
    <div class="col-full">
        <div class="header-wrap">
            <div class="site-branding">
                <a href="{{ route('client.index') }}">
                    <img width="100" src="{{ asset('bower_components/client-pizza/assets/images/sidebar-about-2.png') }}" alt="">
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
                <div class="primary-navigation">
                    <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                        <li class="menu-item"><a href="{{ route('client.index') }}">{{ __('client.header.home') }}</a></li>
                        <li class="yamm-fw menu-item menu-item-has-children">
                            <a href="about.html">{{ __('client.header.products') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <div class="yamm-content">
                                        <div class="kc-wrap-columns">
                                            <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3">
                                                <div class="kc-col-container">
                                                    <div class="widget widget_nav_menu kc-elm kc-css-1908114">
                                                        <div class="menu-pages-menu-1-container">
                                                            <ul id="menu-pages-menu-5" class="menu">
                                                                @foreach ($categories as $category)
                                                                    <li class="nav-title menu-item"><a href="#">{{ $category->name }}</a></li>
                                                                    @if (count($category->children))
                                                                        @foreach ($category->children as $cateChild)
                                                                            <li class="menu-item"><a href="#">{{ $cateChild->name }}</a></li>
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
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
                        @if (!Auth::check())
                            <li class="menu-item"><a href="{{ route('client.getFormLogin') }}">{{ __('client.header.login') }}</a></li>
                            <li class="menu-item"><a href="{{ route('client.getFormRegister') }}">{{ __('client.header.register') }}</a></li>
                        @else
                            <li class="menu-item">
                                <a href="#">{{ __('client.header.hi') }}, {{ Auth::user()->fullname }}</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('client.logout') }}">{{ __('client.header.logout') }}</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">

                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a href="{{ route('client.cart') }}" title="View your shopping cart">
                        <i class="po po-scooter"></i>
                        <span>{{ __('client.header.go_to_cart') }}</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('client.cart') }}" title="View your shopping cart">
                                @if (session('cart'))
                                    <span class="count">{{ count(session('cart')) }}</span> {{ __('client.header.items') }}</span>
                                @endif
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
