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

Route::get('/', array('as' => 'home', function ()
	{
		return View::make('index');
	}));



Route::get('signin', array('as' => 'signin',
		'uses' => 'UserController@index')
	)->before('guest');


Route::post('signin', array('as' => 'signin',
		'uses' => 'UserController@store')
	)->before('guest');

Route::post('login', array('as' => 'login',
		'uses' => 'UserController@authentication')
	)->before('guest');

Route::get('dash', array('as' => 'dash',
		'uses' => 'DashController@index')
	);
Route::get('logout', array('as' => 'logout', function () {
		Auth::logout();
		return Redirect::route('home')->with('flash_info', 'Bye Bye!');
	}))->before('auth');