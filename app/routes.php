<?php


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

Route::get('register', array('as' => 'register',
		'uses' => 'DashController@create')
	);

Route::post('save', array('as' => 'save',
		'uses' => 'DashController@store')
	);

Route::get('logout', array('as' => 'logout', function () {
		Auth::logout();
		return Redirect::route('home')->with('flash_info', 'Bye Bye!');
	}))->before('auth');




Route::Resource('tasks', 'DashController');
Route::post('tasks/{id}/update', 'DashController@update');
Route::get('tasks/{id}/delete', 'DashController@destroy');
