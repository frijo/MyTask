<!doctype html>
<html lang="es">
	<head>
  	
		@section('cabecera')
			<meta charset="UTF-8">
			<title>My Task</title>

			{{HTML::style('css/bootstrap.min.css');}}
			{{HTML::style('css/bootstrap.css');}}
			{{HTML::script('js/bootstrap.min.js');}}
			{{HTML::script('js/jquery.min.js');}}
			{{HTML::script('js/jquery.min.js');}}
			{{HTML::script('js/bootstrap.js');}}
			

		@show
	</head>

	<body>
		<div class="navbar navbar-default">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			     @if(Auth::check())
			    	<a class="navbar-brand" href="{{ route('dash') }}"><img class='pull-left' src="{{ asset('images/MyTask-OpenBook-Icon72.png') }}" alt=' My Task'/>My Task </a>
			  	@else
			 		<a class="navbar-brand" href="{{ route('home') }}"><img class='pull-left' src="{{ asset('images/MyTask-OpenBook-Icon72.png') }}" alt=' My Task'/>My Task </a>	 	
			  	@endif
			  </div>
			  <div class="navbar-collapse collapse navbar-responsive-collapse">
			    @if(Auth::check())
			    <ul class="nav navbar-nav">

			      <li><a href="#" >New Task</a></li>
			      


			    </ul>

			    @else
			    <ul class="nav navbar-nav">

			      <li><a href="#" data-toggle="modal" data-target="#Singnin_Window">Sign in</a></li>
			      


			    </ul>
			    @endif

			    @if(Auth::check())
				 <div class="navbar-right">
				  <div class="btn-group"  id="btn-LogUser">
					  
					  <a href="#" class="btn btn-success">{{ Auth::user()->name }}</a>
					  <a aria-expanded="false" href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li><a href="#">Edit User</a></li>
					    <li><a href="#">Delete User</a></li>
					   
					    <li class="divider"></li>
					    <li><a href="{{ route('logout') }}">Log out</a></li>
					  </ul>
					
					</div>
				</div>
			  @else
			  	<ul class="nav navbar-nav navbar-right">
			      <a href="#" id="btn-primary" class="btn btn-primary" data-toggle="modal" data-target="#LoginWindow">Login</a>
			    </ul>
			   @endif
			  </div>
			 

		</div>
		<div class="container">
			{{ View::make('notifications.messages') }}
			@section('cuerpo')
			@show
		 
		</div>

	

		
	</body>
</html>