@extends('layouts.base')

@section('cabecera')
    @parent


@stop

@section('cuerpo')
	@parent
	

		<img class='pull-left' src="{{ asset('images/MyTask-OpenBook-IconBIG.png') }}" alt=' My Task'/>

<div id="LoginWindow" class="modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    

	<div id="login-overlay"  class="modal-dialog" >
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"><img class='pull-left' src="{{ asset('images/Login-icon.png') }}"/>My Task  Login</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                            {{ Form::open(array('url' => 'login', 'role'=>'form')) }}
                              <div class="form-group">
                                  {{ Form::label('email', 'Email',array('class' => 'control-label')) }}
                                  {{ Form::text('email', Input::old('email'),array('name'=> 'Login_email','id'=> 'Login_email','class'=> 'form-control','title'=>'Please enter you email', 'placeholder'=>'example@gmail.com'))}}

                              </div>
                              <div class="form-group">
                                {{ Form::label('password', 'Password',array('class' => 'control-label')) }}
                                  {{ Form::password('password',
                                      array(
                                        'name'        => 'Login_password',
                                        'id'          => 'Login_password',
                                        'class'       => 'form-control',
                                        'type'        => 'password',
                                        'title'       =>'Please enter your password'
                                        ))
                                  }}
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong email og password</div>
                              
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              {{ Form::close() }}
 
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
	</div>

  <div id="Singnin_Window" class="modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    

  <div id="Signin-overlay"  class="modal-dialog" >
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"><img class='pull-left' src="{{ asset('images/Add-User-icon.png') }}"/> My Task  Sign in</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                              {{ Form::open(array('url' => 'signin', 'role'=>'form')) }}
                              <div class="form-group">
                                 <h2>New User</h2>
                              </div>
                              <div class="form-group">

                                  {{ Form::label('email', 'Email',array('class' => 'control-label')) }}
                                  {{ Form::text('email', Input::old('email'),array('name'=> 'email','id'=> 'email','class'=> 'form-control','title'=>'Please enter you email', 'placeholder'=>'example@gmail.com'))}}
                                  <p class="text-danger">
                                    {{ $errors->signin->first('email') }}
                                  </p>
                              </div>
                              <div class="form-group">

                                  {{ Form::label('name', 'Name',array('class' => 'control-label')) }}
                                  {{ Form::text('name', Input::old('name'),array('name'=> 'name','id'=> 'name','class'=> 'form-control','title'=>'Please enter you name', 'placeholder'=>'Name'))}}
                                  <p class="text-danger">
                                    {{ $errors->signin->first('name') }}
                                  </p>
                              </div>
                              <div class="form-group">
                                  {{ Form::label('password', 'Password',array('class' => 'control-label')) }}
                                  {{ Form::password('password',
                                      array(
                                        'name'        => 'password',
                                        'id'          => 'password',
                                        'class'       => 'form-control',
                                        'type'        => 'password',
                                        'title'       =>'Please enter your password'
                                        ))
                                  }}
                                  <p class="text-danger">
                                    {{ $errors->signin->first('password') }}
                                  </p>
                              </div>
                              <div class="form-group">
                                  {{ Form::label('password', 'Confirm Password',array('class' => 'control-label')) }}
                                  {{ Form::password('password',
                                      array(
                                        'name'        => 'password_confirmation',
                                        'id'          => 'password_confirmation',
                                        'class'       => 'form-control',
                                        'type'        => 'password',
                                        'title'       =>'Please enter your password again'
                                        ))
                                  }}
                                  <p class="text-danger">
                                    {{ $errors->signin->first('password_confirmation') }}
                                  </p>
                              </div>
                              
                              
                              <button type="submit" class="btn btn-success btn-block">Create</button>
                          {{ Form::close() }}

                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
  
  </div>

@stop