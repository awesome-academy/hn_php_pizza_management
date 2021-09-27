<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
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
}
