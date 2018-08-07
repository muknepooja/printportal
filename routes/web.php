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

Route::get('/', function () {
    return view('theme_u::index');
});
Route::get('home','HomeController@index')->name('home'); 
Route::get('order','OrderController@index')->name('order'); 
Route::get('profile','OrderController@profile')->name('profile'); 
Route::get('sdashboard', 'OrderController@sdashboard')->name('sdashboard');
Route::get('adashboard', 'OrderController@adashboard')->name('adashboard');
Route::get('dashboard', 'OrderController@dashboard')->name('userdashboard');
Route::get('delivery', 'OrderController@delivery')->name('delivery');
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('verify','ResourceController@index')->name('verify');
Route::prefix('user')->group(function() {
	Route::get('order','OrderController@index')->name('order');
});
Route::prefix('admin')->group(function () {
    Route::resource('order', 'AOrderController');
    Route::resource('employee', 'EmployeeController');
    Route::resource('template', 'ETemplateController');
});
Route::get('aorder', 'OrderController@manage')->name('aorder');
Route::get('delivery', 'EmployeeController@delivery')->name('delivery');
Route::get('udelivery', 'EmployeeController@udelivery')->name('udelivery');
Route::get('employee', 'EmployeeController@index')->name('employee');
Route::get('approval', 'ApprovalController@index')->name('approval');
Route::get('approvalstate','ApprovalController@approvalstate')->name('approvalstate');
Route::get('aapproval', 'ApprovalController@aapproval')->name('aapproval');
Route::get('aapprovalstate','ApprovalController@aapprovalstate')->name('aapprovalstate');
