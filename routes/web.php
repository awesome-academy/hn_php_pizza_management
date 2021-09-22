<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/', 'as' => 'client.', 'namespace' => 'Client'], function () {
    //Home - Trang chủ
    Route::get('/', 'ClientController@index')->name('index');
});

// Auth::routes();

Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //View login
    Route::get('/login', 'AuthController@login')->name('view_login');
    //Post Login
    Route::post('/login', 'AuthController@postLogin')->name('post_login');
    //Logout
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::group(['middleware' => 'admin'], function () {
        //Dashboard
        Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    });
});
