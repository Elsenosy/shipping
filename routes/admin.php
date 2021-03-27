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

Route::namespace('Auth')->name('admin.')->middleware('adminGuest')->group(function () {

    //Login Routes
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');

    //Forgot Password Routes
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
});

Route::group(['middleware' => 'adminAuth'], function(){
    Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');


    // Requests 
    Route::get('/requests', 'ShippingController@index')->name('priceRequests');
    Route::get('/request/{id}', 'ShippingController@show')->name('showRequest');
});
