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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('role:admin')->group(function(){

	Route::get('dashboard','backend\BackendController@index')->name('dashboard');

	Route::resource('cartypes','backend\CartypeController');

	Route::resource('cars','backend\CarController');

	Route::resource('hotels','backend\HotelController');
	Route::resource('locations','backend\LocationController');
	Route::resource('travelroutes','backend\TravelrouteController');

	Route::resource('packages','backend\PackageController');

	Route::resource('users','backend\UserController');

	Route::get('confirmlist','backend\BookingController@confirmlist')->name('confirmlist');
});

Route::resource('bookings','backend\BookingController');

Route::get('/','frontend\FrontendController@index')->name('index');

Route::post('/search_route','frontend\FrontendController@search_route')->name('search_route');


Route::get('about','frontend\FrontendController@about')->name('about');

Route::get('contact','frontend\FrontendController@contact')->name('contact');

Route::get('package','frontend\FrontendController@package')->name('package');

Route::get('packagedetail/{id}','frontend\FrontendController@packagedetail')->name('packagedetail');

Route::get('custompackage','frontend\FrontendController@custompackage')->name('custompackage');

// Route::get('login','frontend\FrontendController@login')->name('login');
Route::get('register','frontend\FrontendController@register')->name('register');
Route::get('login','frontend\FrontController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
