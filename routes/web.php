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

Route::get('dashboard','backend\BackendController@index')->name('dashboard');

Route::resource('cartypes','backend\CartypeController');

Route::resource('cars','backend\CarController');

Route::resource('hotels','backend\HotelController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
