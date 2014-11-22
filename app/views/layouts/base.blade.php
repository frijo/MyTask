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
			    <a class="navbar-brand" href="#"><img class='pull-left' src="{{ asset('images/MyTask-OpenBook-Icon72.png') }}" alt=' My Task'/>My Task </a>
			  </div>
			  <div class="navbar-collapse collapse navbar-responsive-collapse">
			    <ul class="nav navbar-nav">

			      <li><a href="#" data-toggle="modal" data-target="#Singnin_Window">Sign in</a></li>
			      


			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			      <a href="#" id="btn-primary" class="btn btn-primary" data-toggle="modal" data-target="#LoginWindow">Login</a>
			    </ul>
			  </div>

		</div>
		<div class="container">
			{{ View::make('notifications.messages') }}
			@section('cuerpo')
			@show
		 
		</div>

	

		
	</body>
</html>