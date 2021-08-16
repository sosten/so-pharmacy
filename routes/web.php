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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'App\Http\Controllers\AboutController@about');
Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/add_product','App\Http\Controllers\ShopController@add_product');
Route::post('/store_product','App\Http\Controllers\ShopController@store_product');
Route::get('product_details/{id}','App\Http\Controllers\ShopController@product_details');
Route::delete('remove_product/{id}','App\Http\Controllers\ShopController@remove_product');
Route::get('/edit_product/{id}', 'App\Http\Controllers\ShopController@edit');
Route::post('/edit', 'App\Http\Controllers\ShopController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
