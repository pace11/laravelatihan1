<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('alluser', 'UserController@ambilData');

Route::resource('user','UserController'); // panggil function di UserController, ambil nilai sesuai id

Route::resource('lihat','UserController@lihatData');

Route::resource('posts','PostController');
