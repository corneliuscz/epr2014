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
  $attendeesCount['hlavni'] = Attendee::all()->count();
  $attendeesCount['s1'] = Attendee::where('seminar', 'LIKE', 's1')->count();
  $attendeesCount['s2'] = Attendee::where('seminar', 'LIKE', 's2')->count();
  $attendeesCount['s3'] = Attendee::where('seminar', 'LIKE', 's3')->count();
  $opts = Option::all();
  $opts = json_decode($opts, true);

  $options['zacatek_registrace']  = $opts[0]['value'];
  $options['konec_registrace']    = $opts[1]['value'];

  $options['kapacita']            = $opts[2]['value'];
  $options['kapacita_s1']         = $opts[3]['value'];
  $options['kapacita_s2']         = $opts[4]['value'];
  $options['kapacita_s3']         = $opts[5]['value'];

  $volne['s1'] = $options['kapacita_s1'] - $attendeesCount['s1'];
  $volne['s2'] = $options['kapacita_s2'] - $attendeesCount['s2'];
  $volne['s3'] = $options['kapacita_s3'] - $attendeesCount['s3'];

  return View::make('home')->with('attendeesCount', $attendeesCount)
                           ->with('volne', $volne)
                           ->with('options', $options);
}]);

Route::get('login', 'SessionsController@create' );
Route::get('logout', 'SessionsController@destroy' );

Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);

Route::get('admin', 'AttendeesController@index' )->before('auth');
Route::get('admin/odhlaseni', 'AttcancelledController@index' )->before('auth');
Route::get('admin/nastaveni', 'OptionsController@index' )->before('auth');

Route::post('attendees/delete/{email}/{cancel_hash}', 'AttendeesController@deleteme')->before('csrf');

Route::resource('attendees', 'AttendeesController');
Route::resource('cancellees', 'AttcancelledController', ['only' => ['index']]);
Route::resource('options', 'OptionsController');

Route::get('odhlasit/{email}/{cancel_hash}', function ($email, $cancel_hash)
{
  $cancel_hash_decoded = base64_decode($cancel_hash);
  $attendees = Attendee::where('email', 'like', $email)->where('cancel_hash', 'like', $cancel_hash_decoded)->first();

  return View::make('odhlasit')->with('attendees', $attendees)->with('cancel_hash', $cancel_hash);
});
