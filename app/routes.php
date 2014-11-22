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
	);


Route::post('signin', array('as' => 'signin',
		'uses' => 'UserController@store')
	);
Route::post('login', array('as' => 'login',
		'uses' => 'UserController@authentication')
	);