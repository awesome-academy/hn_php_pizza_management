@extends('layouts.client.layout')
@section('content')
<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="home-v1-slider" >
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item slider-1" style="background-image: url({{asset('bower_components/client-pizza/assets/images/slider/homepage-slider-1.jpg')}});">
                            <div class="caption fadeIn">
                                <div class="pre-title">
                                    <div class="border front"></div>
                                    <div class="lable">New!</div>
                                    <div class="pre-title-value">LIMITED TIME OFFER</div>
                                    <div class="border back"></div>
                                </div>
                                <div class="title">SUPREME BBQ</div>
                                <div class="sub-title">CHICKEN</div>
                                <div class="bottom-caption">Bacon  -  Grilled Onions  -  Potatos  -  Mozarella  -  BBQ Sauce</div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.item -->
                        <div class="item slider-2" style="background-image: url({{asset('bower_components/client-pizza/assets/images/slider/homepage-slider-2.jpg')}});">
                            <div class="caption fadeIn">
                                <div class="price-tag">
                                    <div class="border front"> </div>
                                    <div class="price-tag-value">
                                        <div class="price"><span class="symbol">$</span>12<span class="slider-amount">99<br><span class="price-only">only</span></span> </div>
                                    </div>
                                    <div class="border back"> </div>
                                </div>
                                <div class="title">ORYGINAL ITALY</div>
                                <div class="sub-title">PIZZA LOVERS SET</div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.item -->
                        <div class="item slider-3" style="background-image: url({{asset('bower_components/client-pizza/assets/images/slider/homepage-slider-3.jpg')}});">
                            <div class="caption fadeIn">
                                <div class="pre-title">DISCOVER WHAT'S NEW</div>
                                <div class="title"><span>and</span>order<span>with<br>visa</span>online</div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.item -->
                        <div class="item slider-4" style="background-image: url({{asset('bower_components/client-pizza/assets/images/slider/homepage-slider-4.jpg')}});">
                            <div class="caption fadeIn">
                                <div class="pre-title">EXCLUSIVE OFFER</div>
                                <div class="title"><span>VEGGIE FUN</span><br>DELICIOUS SUMMER!</div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <div class="tiles">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="banner top-left" >
                                <a href="#">
                                    <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url({{asset('bower_components/client-pizza/assets/images/homepage-banners/1.jpg')}}); height: 442px;">
                                        <div class="caption">
                                            <h3 class="title">GRILLED CHICKEN</h3>
                                            <h4 class="subtitle">SUMMER PIZZA</h4>
                                            <span class="button">HOT &amp; SPICY</span>
                                            <span class="condition"><em>*</em>ONLY IN LOCAL</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="banners">
                                <div class="row">
                                    <div class="banner col-sm-6 top-right" >
                                        <a href="#">
                                            <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url({{asset('bower_components/client-pizza/assets/images/homepage-banners/2.jpg')}}); height: 210px;">
                                                <div class="caption">
                                                    <h3 class="title">FREE</h3>
                                                    <h4 class="subtitle">FRIES</h4>
                                                    <div class="description">for online orders in wendsdays</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="banner col-sm-6 top-right" >
                                        <a href="#">
                                            <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url({{asset('bower_components/client-pizza/assets/images/homepage-banners/3.jpg')}}); height: 210px;">
                                                <div class="caption">
                                                    <h3 class="title">iCED COFFEE</h3>
                                                    <h4 class="subtitle">SUMMERS</h4>
                                                    <span class="condition"><em>*</em>ONLY IN LOCAL</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner center" >
                                <a href="#">
                                    <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( {{asset('bower_components/client-pizza/assets/images/homepage-banners/4.jpg')}}); height: 210px;">
                                        <div class="caption">
                                            <h3 class="title"><span>ORDER</span> ONLINE</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-tabs">
                    <ul class="nav nav-tabs pizzaro-nav-tabs" >
                        <li class="nav-item">
                            <a href="#h1-tab-products-1" data-toggle="tab">{{ $meatPizza->name }}</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#h1-tab-products-2" class="active" data-toggle="tab">{{ $mixedPizza->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#h1-tab-products-3" data-toggle="tab">{{ $vegetarianPizza->name }}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="h1-tab-products-1">
                            <div class="section-products">
                                <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                        <ul class="products">
                                            <!-- /.products -->
                                            @foreach ($meatPizza->products->take(3) as $meat)
                                                <li class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <div class="product-image-wrapper">
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                <img src="{{ asset($meat->thumbnail) }}" class="img-responsive" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content-wrapper">
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                    <h3>{{ $meat->name }}</h3>
                                                                    <div itemprop="description">
                                                                        <p style="max-height: none;">{{ $meat->description }}</p>
                                                                    </div>
                                                                    <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                            <h3><span>Size</span></h3>
                                                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                                                <span class="ywapo_label_tag_position_after">
                                                                                @foreach (config('common.size') as $key => $size)
                                                                                    @if ($key == $meat->size)
                                                                                        <span class="ywapo_option_label ywapo_label_position_after">{{ $size }}</span></span>
                                                                                    @endif
                                                                                @endforeach
                                                                                <span class="ywapo_label_price">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">{{ $meat->price }}</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a rel="nofollow" href="{{ route('client.addToCart', ['id' => $meat->id]) }}" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">{{ __('client.add_to_cart') }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="h1-tab-products-2">
                            <div class="section-products">
                                <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                        <ul class="products">
                                            @foreach ($mixedPizza->products->take(3) as $mixed)
                                                <li class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <div class="product-image-wrapper">
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                <img src="{{ asset($mixed->thumbnail) }}" class="img-responsive" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content-wrapper">
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                    <h3>{{ $mixed->name }}</h3>
                                                                    <div itemprop="description">
                                                                        <p style="max-height: none;">{{ $mixed->description }}</p>
                                                                    </div>
                                                                    <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                            <h3><span>Size</span></h3>
                                                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                                                <span class="ywapo_label_tag_position_after">
                                                                                @foreach (config('common.size') as $key => $size)
                                                                                    @if ($key == $mixed->size)
                                                                                        <span class="ywapo_option_label ywapo_label_position_after">{{ $size }}</span></span>
                                                                                    @endif
                                                                                @endforeach
                                                                                <span class="ywapo_label_price">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">{{ $mixed->price }}</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">{{ __('client.add_to_cart') }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="h1-tab-products-3">
                            <div class="section-products">
                                <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                        <ul class="products">
                                            @foreach ($vegetarianPizza->products->take(3) as $vegetarian)
                                                <li class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <div class="product-image-wrapper">
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                <img src="{{ asset($vegetarian->thumbnail) }}" class="img-responsive" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content-wrapper">
                                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                                    <h3>{{ $vegetarian->name }}</h3>
                                                                    <div itemprop="description">
                                                                        <p style="max-height: none;">{{ $vegetarian->description }}</p>
                                                                    </div>
                                                                    <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                            <h3><span>Size</span></h3>
                                                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                                                <span class="ywapo_label_tag_position_after">
                                                                                @foreach (config('common.size') as $key => $size)
                                                                                    @if ($key == $vegetarian->size)
                                                                                        <span class="ywapo_option_label ywapo_label_position_after">{{ $size }}</span></span>
                                                                                    @endif
                                                                                @endforeach
                                                                                <span class="ywapo_label_price">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">{{ $vegetarian->price }}</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">{{ __('client.add_to_cart') }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
                <div class="stretch-full-width section-products-sale-event"  style="background-size: cover; background-position: center center; background-image: url( {{asset('bower_components/client-pizza/assets/images/homepage-banners/5.jpg')}}); height: 468px;">
                    <div class="sale-event-content">
                        <h3 class="pre-title"><span>FREE DELIVERY WITH</span></h3>
                        <h2 class="section-title">PIZZA OF THE DAY</h2>
                        <div class="sale-event-products">
                            <div class="products-price">
                                <span class="price"><span class="currency"> &#36;</span>9<span class="decimals">99</span><span class="price-info">EACH</span></span>
                            </div>
                            <ul class="products-info">
                                <li>
                                    <a href="#" class="woocommerce-LoopProduct-link">
                                        <h3>Vegge Lover</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="woocommerce-LoopProduct-link">
                                        <h3>Summer Pizza</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="woocommerce-LoopProduct-link">
                                        <h3>Chicken Hawaii</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="button">Order Now</a>
                    </div>
                </div>
                <div class="section-products">
                    <h2 class="section-title">{{ __('client.latest_product') }}</h2>
                    <div class="columns-4">
                        <ul class="products">
                            @foreach ($latestProducts as $latestProduct)
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <div class="product-image-wrapper">
                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                <img src="{{ asset($latestProduct->thumbnail) }}" class="img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                    <h3>{{ $latestProduct->name }}</h3>
                                                    <div itemprop="description">
                                                        <p style="max-height: none;">{{ $latestProduct->description }}</p>
                                                    </div>
                                                    <div class="yith_wapo_groups_container">
                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                            <h3><span>Size</span></h3>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                                <span class="ywapo_label_tag_position_after">
                                                                    <span class="ywapo_option_label ywapo_label_position_after">
                                                                        @foreach (config('common.size') as $key => $size)
                                                                            @if ($key == $latestProduct->size)
                                                                                <span class="ywapo_option_label ywapo_label_position_after">{{ $size }}</span></span>
                                                                            @endif
                                                                        @endforeach
                                                                    </span>
                                                                </span>
                                                                <span class="ywapo_label_price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{ $latestProduct->price }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hover-area">
                                                    <a rel="nofollow" href="{{ route('client.addToCart', ['id' => $latestProduct->id]) }}" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">{{ __('client.add_to_cart') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-outer -->
                                </li>
                                <!-- /.products -->
                            @endforeach
                        </ul>
                    </div>
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
</div>
@endsection
