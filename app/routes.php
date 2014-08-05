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

Route::get('/', ['as' => 'home', function()
{
	return View::make('home');
}]);

Route::get('admin', function() 
{
	return View::make('admin');
})->before('auth');

Route::get('login', 'SessionsController@create' );

Route::get('logout', 'SessionsController@destroy' );

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);

//Route::get('/', function()
//{
//	return View::make('hello');
//});
