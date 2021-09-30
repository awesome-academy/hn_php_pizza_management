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
                                    @if (Session::get('register_success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('register_success') }}
                                    </div>
                                    @endif
                                    <div class="u-column2 col-2">
                                        <h2>{{ __('client.register.register') }}</h2>
                                        <form  class="register" action="{{ route('client.register') }}" method="POST">
                                            @csrf
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.register.label.fullname') }}<span class="required">*</span></label>
                                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="fullname"/>
                                                @error('fullname')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.register.label.email') }}<span class="required">*</span></label>
                                                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"/>
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.register.label.phone') }}</label>
                                                <input type="number" class="woocommerce-Input woocommerce-Input--text input-text" name="phone"/>
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.register.label.password') }} <span class="required">*</span></label>
                                                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"/>
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                <label>{{ __('client.register.label.password_confirm') }}<span class="required">*</span></label>
                                                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_confirm"/>
                                                @error('password_confirm')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <!-- Spam Trap -->
                                            <p class="woocomerce-FormRow form-row">
                                                <input type="submit" class="woocommerce-Button button" name="register" value="{{ __('client.register.register') }}" />
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
