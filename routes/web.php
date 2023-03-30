<?php

use Illuminate\Support\Facades\Route;

include 'route_admin.php';

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\\Http\\Controllers\\Frontend'], function () {
    Route::get('', 'HomeController@index')->name('get.home');
    Route::get('san-pham', 'ProductController@index')->name('get.product.list');
    Route::get('san-pham/{slug}', 'ProductDetailController@getProductDetail')->name('get.product.detail');

    //contact
    Route::get('contact', 'ContactController@getContact')->name('get.contact');
    Route::post('contact', 'ContactController@postContact');


    //gio hang
    Route::get('don-hang', 'ShoppingCartController@index')->name('get.shopping.list');
    Route::prefix('shopping')->group(function () {
        Route::get('add/{id}', 'ShoppingCartController@add')->name('get.shopping.add');
        Route::get('delete/{id}', 'ShoppingCartController@delete')->name('get.shopping.delete');
        Route::get('update/{id}', 'ShoppingCartController@update')->name('get.shopping.update');

        Route::get('pay', 'ShoppingCartController@getFormPay')->name('get.shopping.pay');
        Route::post('pay', 'ShoppingCartController@postPay');
    });
});
Route::group(['namespace' => 'App\\Http\\Controllers\\Auth', 'prefix' => 'account'], function () {
    Route::get('register', 'RegisterController@getFormRegister')->name('get.register');
    Route::post('register', 'RegisterController@postRegister');

    Route::get('login', 'LoginController@getFormLogin')->name('get.login');
    Route::post('login', 'LoginController@postLogin');

    Route::get('logout', 'LogoutController@getLogout')->name('get.logout');
});
