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

Route::get('frontend','frontend\FrontendController@index')->name('index');
Route::get('about','frontend\FrontendController@about')->name('about');
Route::get('contact','frontend\FrontendController@contact')->name('contact');
Route::get('package','frontend\FrontendController@package')->name('package');
Route::get('packagedetail','frontend\FrontendController@packagedetail')->name('packagedetail');
Route::get('login','frontend\FrontendController@login')->name('login');
Route::get('register','frontend\FrontendController@register')->name('register');