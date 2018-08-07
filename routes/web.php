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
Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('verify','ResourceController@index')->name('verify');

Route::prefix('user')->group(function() {
	Route::get('order','OrderController@index')->name('order');
});

Route::prefix('admin')->group(function () {
    Route::resource('order', 'AOrderController');
    Route::resource('employee', 'EmployeeController');
    Route::resource('template', 'ETemplateController');
});

Route::prefix('superadmin')->group(function () {
    Route::resource('approval', 'ApprovalController');
    Route::get('approvalstate','ApprovalController@approvalstate')->name('approval.approvalstate');
});
