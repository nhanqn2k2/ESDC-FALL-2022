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

//Fontend
//Route::get('/', function () {
//    return view('frontend.index');
//});

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/index.html','App\Http\Controllers\HomeController@index');
Route::get('/check-out.blade.php','App\Http\Controllers\HomeController@checkout');
Route::get('/shopping-cart.blade.php', 'App\Http\Controllers\HomeController@shopping_cart');


//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/admin/dashboard','App\Http\Controllers\AdminController@show_dashboard');
