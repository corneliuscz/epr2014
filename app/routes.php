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
  $attendeesCount = Attendee::all()->count();
  return View::make('home')->with('attendeesCount', $attendeesCount);;
}]);

Route::get('admin', 'AttendeesController@index' )->before('auth');

Route::get('login', 'SessionsController@create' );

Route::get('logout', 'SessionsController@destroy' );

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);

Route::resource('attendees', 'AttendeesController');

