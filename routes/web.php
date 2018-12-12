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

Route::get('/', 'ShopController@dashboard');

Route::resource('shop', 'ShopController')->except(['index', 'destroy']);
Route::resource('reviews', 'ReviewController');

Route::get('login', function () {
    return view('login.login');
});

Route::get('test', 'ShopController@test2');