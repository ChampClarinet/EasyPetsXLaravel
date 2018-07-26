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

// Route::get('/', function () {
//     // Only authenticated users may enter...
//     return view('welcome');
// })->middleware('auth');

//Route::get('/', 'LoginController@index');

Route::get('/',function(){ return View::make('Login/login'); });

Route::get('test',function(){ return view('Login/app'); });
