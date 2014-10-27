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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::get('login', 'SessionsController@create' );
Route::get('logout', 'SessionsController@destroy' );

Route::get('odhlasit/{email}/{cancel_hash}', function ($email, $cancel_hash)
{
  $cancel_hash_decoded = base64_decode($cancel_hash);
  $attendees = Attendee::where('email', 'like', $email)->where('cancel_hash', 'like', $cancel_hash_decoded)->first();

  return View::make('odhlasit')->with('attendees', $attendees)->with('cancel_hash', $cancel_hash);
});

Route::get('diskuze', 'DiscussionsController@create');

Route::get('nactiotazky', function() {
  if(Request::ajax())
    {
      $questions = Question::getPublicQuestions();
      echo $questions;
    }
});

Route::get('admin', 'AttendeesController@index' )->before('auth');
Route::get('admin/odhlaseni', 'AttcancelledController@index' )->before('auth');
Route::get('admin/dotazy', 'QuestionsController@index' )->before('auth');
Route::get('admin/nastaveni', 'OptionsController@index' )->before('auth');

Route::post('attendees/delete/{email}/{cancel_hash}', 'AttendeesController@deleteme')->before('csrf');

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);

Route::resource('attendees', 'AttendeesController');
Route::resource('cancellees', 'AttcancelledController', ['only' => ['index']]);
Route::resource('options', 'OptionsController');
Route::resource('questions', 'QuestionsController');
Route::resource('dotazy', 'DiscussionsController');
