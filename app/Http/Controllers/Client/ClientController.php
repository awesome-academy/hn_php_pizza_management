<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        $meatPizza = Category::where('slug', 'pizza-thit')->with('products')->first();
        $vegetarianPizza = Category::where('slug', 'pizza-chay')->with('products')->first();
        $mixedPizza = Category::where('slug', 'pizza-thap-cam')->with('products')->first();
        $latestProducts = Product::orderBy('id', 'desc')->limit(4)->get();

        return view('layouts.client.sites.home', compact(
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
    
    public function getFormRegister()
    {
        return view('layouts.client.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('register_success', __('client.notification.register_success'));
    }
}
