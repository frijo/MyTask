<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function authentication()
	{
		$user = array(
	  	'email' => Input::get('Login_email'),
	  	'password' => Input::get('Login_password')
		);
  
	    if (Auth::attempt($user)) {

				return Redirect::route('home')
		         ->with('flash_success', 'Welcome '.Auth::user()->name);
	    }


	    
	    // Si la autenticación fallo volvemos a cargar el formulario de login
	    return Redirect::route('home')
	        ->with('flash_warning', 'Nombre de usuario y/o contraseña incorrecto(s)')
	        ->withInput();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Input::flash();
			
		$rules = array(
			'email'    => 'required|email|unique:users',
			'name'    => 'required|min:5',
			'password' =>'required|min:5|Confirmed',
			'password_confirmation' =>'Required|min:5'

		);

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->passes()) {
			$user = new User();
			$user->email = Input::get('email');
			$user->name = Input::get('name');
			$user->password = Hash::make(Input::get('password'));
			
			$user->save();

			return Redirect::route('home')
				->with('flash_success', 'The User '.$user->name.' '.'was successfully create.');
		}
		else
		{
			//Se retornar los errores de validacion al formulario
			return Redirect::to('signin')
				->withErrors($validator, 'signin');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
