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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([], function(){
    $controller = "ShippingController@";

    Route::post('/sea-request', $controller.'storeSeaRequest')->name('storeSeaRequest');
    Route::post('/air-request', $controller.'storeAirRequest')->name('storeAirRequest');
    Route::post('/custom-request', $controller.'storeCustomRequest')->name('storeCustomRequest');
});

