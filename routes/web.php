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

Route::get('/', 'pagesController@getHome');

Route::get('/contact', 'ContactusController@getContact');

Route::post('/contact/send', 'ContactusController@submit');

Route::get('/about', 'pagesController@getAbout');

Route::get('/blog', 'BlogVController@getBlog');

Route::get('/blogdetails/{id}', 'BlogVController@getBlogDetails');

Route::get('/listings', 'HouseController@getListings');

Route::post('/listings/send', 'HouseController@getSRequestNow');

Route::get('/rentals', 'HouseController@getRentals');

Route::post('/rentals/send', 'HouseController@getRequestNow');

Route::get('/listingsdetails/{id}', 'HouseController@getsalesDetails');

Route::get('/rentalsdetails/{id}', 'HouseController@getRentDetails');

Route::get('/landlistings', 'LandController@getListings');

Route::post('landlistings/send', 'LandController@getRequestNow');

Route::get('/landdetails/{id}', 'LandController@getDetails');

Route::get('/searchhouse', 'SearchController@housesearch');

Route::get('/searchland', 'SearchController@landsearch');

Route::get('/request', 'pagesController@getRequest');

Route::post('/request/send', 'pagesController@getPropertyRequest');

Route::post('/send', 'pagesController@getRequestNow');


Auth::routes();

Route::get('admin', 'HomeController@index')->name('admin');
Auth::routes();

Route::get('admin', 'HomeController@index')->name('admin')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::post('/deletehouse/{id}', 'HouseController@getdeletehouse');

	Route::post('/edithouse/{id}', 'HouseController@getedithouse');

	Route::post('/deleteland/{id}', 'LandController@getdeleteland');

	Route::post('/editland/{id}', 'LandController@geteditland');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('uploadblog', function () {
		return view('pages.uploadblog');
	})->name('uploadblog');

	Route::post('/uploadblog/upload', 'blogController@submit');

	Route::get('upload', function () {
		return view('pages.upload');
	})->name('upload');

	Route::post('/upload/uploadhouse', 'PropertylistingController@submithouse');

	Route::post('/upload/uploadland', 'PropertylistingController@submitland');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');


	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

