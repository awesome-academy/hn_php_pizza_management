@extends('layouts.client.layout')
@section('content')
<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" ><a href="index.html">Home</a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Checkout
            </nav>
        </div>
        <!-- .woocommerce-breadcrumb -->
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
                            <span class="step">3</span>{{ __('client.cart.step.step_3') }}
                        </li>
                    </ul>
                </div>
                <div id="post-9" class="post-9 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form name="checkout"  class="checkout woocommerce-checkout" method="post" action="{{ route('client.placeOrder') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>{{ __('client.billing_detail') }}</h3>
                                            <p class="form-row form-row form-row-wide validate-required" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">{{ __('client.checkout.label.fullname') }} </label>
                                                <input type="text" class="input-text" value="{{ Auth::user()->fullname }}" name="billing_first_name" id="billing_first_name" placeholder=""/>
                                            </p>
                                            <div class="clear"></div>
                                            <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                                <label for="billing_email" class="">{{ __('client.checkout.label.email') }} </label>
                                                <input type="email" class="input-text " value="{{ Auth::user()->email }}" name="billing_email" id="billing_email" placeholder=""  autocomplete="email" value=""  />
                                            </p>
                                            <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                                <label for="billing_phone" class="">{{ __('client.checkout.label.phone') }} </label>
                                                <input type="tel" class="input-text " value="{{ Auth::user()->phone }}"name="billing_phone" id="billing_phone" placeholder=""  autocomplete="tel" value=""  />
                                            </p>
                                            <div class="clear"></div>
                                            <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                <label for="billing_address_1" class="">{{ __('client.checkout.label.address') }} </label>
                                                <input type="text" class="input-text" name="billing_address_1" id="billing_address_1" placeholder="{{ __('client.checkout.label.address') }}"  autocomplete="address-line1" value=""  />
                                                @error('billing_address_1')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </p>
                                            <div class="clear"></div>
                                            <p class="form-row form-row notes" id="order_comments_field">
                                                <label for="order_comments" class="">{{ __('client.checkout.label.order_notes') }}</label>
                                                <textarea name="order_comments" class="input-text " id="order_comments" rows="2" cols="5"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <h3 id="order_review_heading">{{ __('client.cart.your_order') }}</h3>
                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">{{ __('client.header.products') }}</th>
                                                <th class="product-total">{{ __('client.cart.total') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($products))
                                            @foreach ($products as $key => $product)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $product['name'] }}&nbsp;<strong class="product-quantity">{{ $product['quantity'] }}</strong>
                                                    <dl class="variation">
                                                        <dt class="variation-Baseprice">{{ __('client.cart.price') }}:</dt>
                                                        <dd class="variation-Baseprice">
                                                            <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ $product['price'] }}</span></p>
                                                        </dd>
                                                        <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">{{ __('client.cart.size') }}:
                                                        </dt>
                                                        <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                            {{ $product['size'] }}
                                                        </dd>
                                                    </dl>
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol"></span>
                                                        <p>{{ $product['price']*$product['quantity'] }}</p>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            @if (count($products))
                                            @php $total = 0; @endphp
                                            @foreach ($products as $product)
                                            @php
                                            $total += $product['quantity']*$product['price'];
                                            @endphp
                                            @endforeach
                                            <tr class="order-total">
                                                <th>{{ __('client.cart.total') }}</th>
                                                <td>
                                                    <strong><span class="woocommerce-Price-amount amount">
                                                    {{ $total }}</span></strong>
                                                </td>
                                            </tr>
                                            @endif
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="{{ config('common.payment_method.cash') }}"  data-order_button_text="" />
                                                <label for="payment_method_cod">{{ __('client.cart.cash_on_delivery') }} </label>
                                            </li>
                                            @error('payment_method')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </ul>
                                        <div class="form-row place-order">
                                            <button class="button alt" type="submit" style="text-align: center;">{{ __('client.cart.place_order') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
