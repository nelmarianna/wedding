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
    return view('welcome');
});
Route::get('/party', function(){
	return view('party');
});
Route::get('/accommodations', function(){
	return view('accommodations');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
