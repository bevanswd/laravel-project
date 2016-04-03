<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get ('/', [
	'uses' => '\App\Http\Controllers\HomeController@index',
	'as' => 'welcome',
]);

Route::auth();

Route::get ('/posts', [
	'uses' => '\App\Http\Controllers\PostController@index',
	'as' => 'posts',
	'middleware' => ['guest'],
]);

Route::resource('posts', 'PostController');

