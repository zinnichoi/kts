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
// Home page
Route::get('/home', 'UserHomeController@index')->name('home');
Route::get('/', 'UserHomeController@index')->name('home');
// Introduce
Route::get('/introduction', 'UserHomeController@introduce')->name('introduction');
Route::get('/design-style', 'UserHomeController@designStyle')->name('design-style');
Route::get('/leader', 'UserHomeController@leader')->name('leader');
// Product
Route::get('/product/{status?}', 'UserProductController@list')->name('product_list');
Route::get('/product/{id}', 'UserProductController@show')->name('product_detail');
// Service
Route::get('/service', 'UserHomeController@service')->name('service');
// Blog
Route::get('/blog/{id?}', 'UserHomeController@blog')->name('blog-list');
// Career
Route::get('/career/{id?}', 'UserHomeController@career')->name('career');
// Contact
Route::get('/contact', 'UserHomeController@contact')->name('contact');
// Admin
