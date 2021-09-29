<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $meatPizza = Category::where('slug', 'pizza-thit')->with('products')->first();
        $vegetarianPizza = Category::where('slug', 'pizza-chay')->with('products')->first();
        $mixedPizza = Category::where('slug', 'pizza-thap-cam')->with('products')->first();
        $latestProducts = Product::orderBy('name', 'desc')->get();

        return view('layouts.client.sites.home', compact(
            'categories',
            'meatPizza',
            'vegetarianPizza',
            'mixedPizza',
            'latestProducts'
        ));
    }
}
