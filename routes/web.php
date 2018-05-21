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
Auth::routes();
Route::get('/', 'MainController@home');
Route::get('/terms', 'MainController@terms');
Route::get('/home', 'MainController@home');
Route::get('/apply', 'MainController@register_index');
Route::post('/apply', 'MainController@register');
Route::get('/admin', 'AdminController@index');