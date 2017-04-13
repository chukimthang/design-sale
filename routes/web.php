<?php

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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('product', [
    'as' => 'product.index', 
    'uses' => 'ProductController@index'
]);

Route::get('product/show', [
    'as' => 'product.show',
    'uses' => 'ProductController@show'
]);

Route::get('user/show', [
    'as' => 'user.show',
    'uses' => 'UserController@show'
]);

Route::get('cart', [
    'as' => 'cart.index',
    'uses' => 'CartController@index'
]);

Route::get('order/create', [
    'as' => 'order.create',
    'uses' => 'OrderController@create'
]);
