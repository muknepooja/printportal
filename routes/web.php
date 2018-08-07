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

Route::get('logout', 'Auth\LoginController@logout');

//Route::get('/home', function () {
//    return view('admin_template');
//});
Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('admin_template');
    return view('theme_u::index');
});
Route::get('order','OrderController@index')->name('order'); 

//Route::get('/home', 'HomeController@index')->name('home');
