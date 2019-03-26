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

Route::resource('guests','GuestController');
Route::post('/uploadFile', 'GuestController@uploadFile');
Route::get('/guests/upload', function(){
  return view('guests/upload');
});
Route::get('/rsvp', function(){
	return view('guests/rsvp');
});
Route::get('/rsvpform', 'GuestController@rsvpedit')->name('rsvpform');
Route::post('/rsvp','GuestController@rsvp');
