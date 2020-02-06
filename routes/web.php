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
// User
Route::get('/home', 'User\HomeController@index')->name('home');
Route::get('/', 'User\HomeController@index')->name('home');
Route::get('/product', 'User\ProductController@list')->name('product_list');
Route::get('/product/{id}', 'User\ProductController@show')->name('product_detail');
// Admin
