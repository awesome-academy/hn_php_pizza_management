<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('layouts.admin.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $formRq = $request->only('email', 'password');
        if (Auth::attempt($formRq)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('admin.view_login');
    }
}
