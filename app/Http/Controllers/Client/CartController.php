<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaceOrderRequest;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        return view('layouts.client.sites.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->thumbnail,
                "size" => $product->size,
            ];
        }
        Session::put('cart', $cart);

        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->qty) {
            $cart = Session::get('cart');
            $cart[$request->id]["quantity"] = $request->qty;
            Session::put('cart', $cart);

            return response()->json([
                'success' => __('client.notification.success_update'),
            ]);
        }
    }

    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $cart = Session::get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                Session::put('cart', $cart);
            }

            return response()->json([
                'success' => __('client.notification.success_update'),
            ]);
        }
    }

    public function checkoutCart()
    {
        $products = Session::get('cart');

        return view('layouts.client.sites.checkout', compact('products'));
    }

    public function placeOrder(PlaceOrderRequest $request)
    {
        $carts = Session::get('cart');

        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['price']*$cart['quantity'];
        }

        $order = new Order();
        $order->user_id = Auth::id();
        $order->order_date = Carbon::now()->format('Y-m-d H:i:s');
        $order->order_address = $request->billing_address_1;
        $order->total = $total;
        $order->note = $request->order_comments;
        $order->payment_method = $request->payment_method;
        $order->status = config('common.confirm_order.pending');
        $order->save();
        
        $idLastOrder = $order->id;
        foreach ($carts as $key => $cart) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $idLastOrder;
            $orderDetail->product_id = $key;
            $orderDetail->quantity = $cart['quantity'];
            $orderDetail->save();
        }
        Session::forget('cart');

        return redirect()->route('client.thanks');
    }

    public function thanks()
    {
        return view('layouts.client.sites.thanks');
    }
}
