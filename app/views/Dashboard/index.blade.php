@extends('layouts.base1')

@section('cabecera')
    @parent


@stop

@section('cuerpo')
	@parent
<style type="text/css"> 
		.task{
		border-color: black;	
       	border-radius: 10%;
       	border: 2%;       	
       	float: left;

       }

      .task1{ 
      	color: white;
      	height: 10%;
      	width: 13%;
      	border-color: black;
      	border-radius: 10%;
       	border: 2%;
        } 
       
    </style>
	
	<div id="mytask">
	<div>

		<div class="task" id="new" >
			<?php
				foreach ($tasks as $row) {
					if ($row->estado == 1) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<p>$row->description</p>";
						echo"</div>";
						
					}
				
				}
			?>
			
		</div>

		<div class="task" id="new">
		<?php
				foreach ($tasks as $row) {
					if ($row->estado == 2) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<p>$row->description</p>";
						echo"</div>";
					}
				
				}
			?>			
		</div>
			
		<div class="task" id="new">
			<?php
				foreach ($tasks as $row) {
					if ($row->estado == 3) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<p>$row->description</p>";
						echo"</div>";
					}
				
				}
			?>
		</div>
		
		<div class="task" id="new">
			<?php
				foreach ($tasks as $row) {
					if ($row->estado == 4) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<p>$row->description</p>";
						echo"</div>";
					}
				
				}
			?>
		</div>	


	</div>
	</div>
	@stop