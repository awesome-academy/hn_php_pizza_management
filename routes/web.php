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

Route::group(['middleware' => 'locale'], function () {
    Route::get('/change-language/{language}', 'Auth\LocalizationController@changeLanguage')->name('changeLanguage');
    //Client
    Route::group(['prefix' => '/', 'as' => 'client.', 'namespace' => 'Client'], function () {
        //Home - Trang chủ
        Route::get('/', 'ClientController@index')->name('index');
        //Cart- Giỏ hàng
        Route::get('/cart', 'CartController@cart')->name('cart');
        //Add to Cart - Thêm giỏ hàng
        Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('addToCart');
        //Update cart - Chỉnh sửa số lượng giỏ hàng
        Route::patch('/update-cart', 'CartController@updateCart')->name('updateCart');
        //Delete Care - Xóa sản phẩm khỏi giỏ hàng
        Route::delete('/delete-cart', 'CartController@deleteCart')->name('deleteCart');
        //Login user
        Route::get('/login', 'ClientController@getFormLogin')->name('getFormLogin');
        Route::post('/login/post', 'ClientController@login')->name('login');
        Route::get('/logout', 'ClientController@logout')->name('logout');
        //User - Auth
        Route::get('/register', 'ClientController@getFormRegister')->name('getFormRegister');
        Route::post('/register/post', 'ClientController@register')->name('register');
        Route::get('/checkout-cart', 'CartController@checkoutCart')->name('checkoutCart');
        Route::post('/place-order', 'CartController@placeOrder')->name('placeOrder');
        Route::get('/thanks', 'CartController@thanks')->name('thanks');
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
            //Category
            Route::group(['prefix' => '/category', 'as' => 'category.'], function () {
                //Index
                Route::get('/', 'CategoryController@index')->name('index');
                //Create
                Route::get('/create', 'CategoryController@create')->name('create');
                //Store
                Route::post('/store', 'CategoryController@store')->name('store');
                //Edit
                Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
                //Update
                Route::post('/update/{id}', 'CategoryController@update')->name('update');
                //Delete
                Route::post('/delete/{id}', 'CategoryController@delete')->name('delete');
            });
            //Product
            Route::group(['prefix' => '/product', 'as' => 'product.'], function () {
                //Index
                Route::get('/', 'ProductController@index')->name('index');
                //Create
                Route::get('/create', 'ProductController@create')->name('create');
                //Store
                Route::post('/store', 'ProductController@store')->name('store');
                //Edit
                Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
                //Update
                Route::post('/update/{id}', 'ProductController@update')->name('update');
                //Delete
                Route::post('/delete/{id}', 'ProductController@delete')->name('delete');
            });
            //Order
            Route::group(['prefix' => '/order', 'as' => 'order.'], function () {
                //Index
                Route::get('/', 'OrderController@index')->name('index');
                //Detail
                Route::get('/detail/{id}', 'OrderController@detail')->name('detail');
                //Update Status
                Route::patch('/update/{id}', 'OrderController@update')->name('update');
            });
        });
    });
});
