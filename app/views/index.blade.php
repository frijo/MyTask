@extends('layouts.base')

@section('cabecera')
    @parent
@stop

@section('cuerpo')
	@parent
	<div class="container">

		<img class='pull-left' src="{{ asset('images/MyTask-OpenBook-IconBIG.png') }}" alt=' My Task'/>


	</div>
@stop