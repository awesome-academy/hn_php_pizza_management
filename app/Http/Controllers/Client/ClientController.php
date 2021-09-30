<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function getFormLogin()
    {
        return view('layouts.client.auth.login');
    }

    public function login(LoginUserRequest $request)
    {
        $data =  $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect()->route('client.index');
        }

        return redirect()->back()->with('error_login', __('client.notification.error_login'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}
