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

Route::get('home', array('as' => 'home', 'uses' => 'PagesController@Home'));

Route::controller('preparazione', 'MailController');
Route::get('list', 'MailController@MailList');
Route::get('invio', 'MailController@Invio');
Route::post('invio/notsended', 'MailController@notSended');
Route::post('invio/notconfirmed', 'MailController@notConfirmed');
