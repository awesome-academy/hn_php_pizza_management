@extends('layouts.client.layout')
@section('content')
<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
        </div>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main" >
                <div id="post-10" class="post-10 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="customer-login-form">
                                <div class="u-columns col2-set">
                                    <div class="u-column1 col-1">
                                        @if (Session::get('error_login'))
                                        <div class="alret alert-danger" role="alert">
                                            {{ Session::get('error_login') }}
                                        </div>
                                        @endif
                                        @if (Session::get('error_cart'))
                                        <div class="alret alert-danger" role="alert">
                                            {{ Session::get('error_cart') }}
                                        </div>
                                        @endif
                                        <h2>{{ __('client.login.login') }}</h2>
                                        <form  class="login" method="POST" action="{{ route('client.login') }}">
                                            @csrf
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.login.label.email') }} <span class="required">*</span></label>
                                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"/>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.login.label.password') }} <span class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" />
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <span>
                                                {{ __('client.cart.link_signup') }}, 
                                                <a style="color: blue;" href="{{ route('client.getFormRegister') }}">{{ __('client.register.register') }}</a>
                                            </span>
                                            <p class="form-row">
                                                <input type="submit" class="woocommerce-Button button" name="login" value="{{ __('client.login.login') }}" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.customer-login-form -->
                        </div>
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
</div>
@endsection
