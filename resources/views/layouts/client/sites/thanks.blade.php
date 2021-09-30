@extends('layouts.client.layout')
@section('content')
<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
        </div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" >
                <div class="pizzaro-order-steps">
                    <ul>
                        <li class="cart">
                            <span style="background-color:#c00a27;color: #FFF" class="step">1</span>{{ __('client.cart.step.step_1') }}
                        </li>
                        <li class="checkout">
                            <span style="background-color:#c00a27;color: #FFF" class="step">2</span>{{ __('client.cart.step.step_2') }}
                        </li>
                        <li class="complete">
                            <span style="background-color:#c00a27;color: #FFF" class="step">3</span>{{ __('client.cart.step.step_3') }}
                        </li>
                    </ul>
                </div>
                <div id="post-9" class="post-9 page type-page status-publish hentry">
                    <header class="entry-header">
                        <h1 class="entry-title">{{ __('client.cart.order_success') }}</h1>
                        <span>{{ __('client.cart.thanks') }}</span>
                    </header>
                </div>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
    </div>
    <!-- .col-full -->
</div>
@endsection
