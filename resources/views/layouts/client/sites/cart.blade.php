@extends('layouts.client.layout')
@section('content')
<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" >
                <a href="{{ route('client.index') }}">{{ __('client.header.home') }}</a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>{{ __('client.header.cart') }}
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
                            <span class="step">2</span>{{ __('client.cart.step.step_2') }}
                        </li>
                        <li class="complete">
                            <span class="step">3</span>{{ __('client.cart.step.step_3') }}
                        </li>
                    </ul>
                </div>
                <div id="post-8" class="post-8 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form>
                                <table class="shop_table shop_table_responsive cart" >
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">{{ __('client.cart.product_name') }}</th>
                                            <th class="product-price">{{ __('client.cart.price') }}</th>
                                            <th class="product-quantity">{{ __('client.cart.quantity') }}</th>
                                            <th class="product-subtotal">{{ __('client.cart.total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (session('cart'))
                                          @foreach (session('cart') as $id => $cart)
                                          <tr class="cart_item">
                                             <td class="product-remove">
                                                   <a href="#" data-id="{{ $id }}"class="remove" >&times;</a>
                                             </td>
                                             <td class="product-thumbnail">
                                                   <a href="single-product-v1.html">
                                                   <img width="180" height="180" src="{{ asset($cart['image']) }}" alt=""/>
                                                   </a>
                                             </td>
                                             <td class="product-name" data-title="Product">
                                                   <a href="single-product-v1.html">{{ $cart['name'] }}</a>
                                                   <dl class="variation">
                                                      <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">{{ __('client.cart.size') }}:
                                                      </dt>
                                                      <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                         @foreach (config('common.size') as $key => $size)
                                                         <p>{{ $cart['size'] == $key ? $size : '' }}</p>
                                                         @endforeach
                                                      </dd>
                                                   </dl>
                                             </td>
                                             <td class="product-price" data-title="Price">
                                                   <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ $cart['price'] }}</span>
                                             </td>
                                             <td class="product-quantity" data-title="Quantity">
                                                   <div class="qty-btn">
                                                      <label>{{ __('client.cart.quantity') }}</label>
                                                      <div class="quantity">
                                                         <input type="number" value="{{ $cart['quantity'] }}" data-id="{{ $id }}" title="Qty" class="input-text qty text"/>
                                                      </div>
                                                   </div>
                                             </td>
                                             <td class="product-subtotal" data-title="Total">
                                                   @php
                                                   $total = 0;
                                                   $total = $cart['quantity'] * $cart['price'];
                                                   @endphp
                                                   <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>
                                                   {{ $total }}
                                                   </span>
                                             </td>
                                          </tr>
                                          @endforeach
                                        @else
                                         <span class="text-danger">{{ __('client.cart.cart_empty') }}</span>
                                        @endif
                                        <div class="cart-collaterals">
                                            <div class="cart_totals">
                                                <table  class="shop_table shop_table_responsive">
                                                    <tr class="order-total">
                                                        <th>{{ __('client.cart.total') }}</th>
                                                        <td data-title="Total">
                                                            <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol"></span>
                                                               @php
                                                                  $subtotal = 0;
                                                               @endphp
                                                               @foreach (session('cart') as $id => $cart)
                                                                  @php
                                                                     $subtotal += $cart['quantity'] * $cart['price'];
                                                                  @endphp
                                                               @endforeach
                                                               {{ $subtotal }}
                                                            </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="#" class="checkout-button button alt wc-forward">{{ __('client.cart.proceed_to_checkout') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .entry-content -->
            </main>
            <!-- #main -->
        </div>
        <!-- #post-## -->
    </div>
    <!-- #primary -->
</div>
@endsection
@section('script_client')
   <script>
      $(document).ready(function() {

         $('.qty').change(function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var qty = $(this).val();

            $.ajax({
               url: '{{ route('client.updateCart') }}',
               method: "patch",
               data: { 
                  _token: '{{ csrf_token() }}',
                  id: id,
                  qty: qty,
               },
               success: function(response) {
                  window.location.reload();
               }
            });
         });

         $(".remove").click(function() {
            var id = $(this).data('id');

            $.ajax({
               url: '{{ route('client.deleteCart') }}',
               method: "delete",
               data: { 
                  _token: '{{ csrf_token() }}',
                  id: id,
               },
               success: function(response) {
                  window.location.reload();
               }
            });
         });
      });
   </script>
@endsection
