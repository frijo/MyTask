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
       	margin-left: 7%;
      	margin-right: 7%;

       }

      .task1{       	
      	color: white;
      	width: 100%;
      	border-color: white;
      	border-radius: 10%;
       	border: 2%;
        } 
       
    </style>
	
	<div id="mytask">
	<div>

		<div class="task" id="new" >
			<?php
				echo "<h3>New</h3>";
				foreach ($tasks as $row) {
					if ($row->estado == 1) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<form action='tasks/$row->id/edit' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button type='submit' class='btn btn-warning btn-xs' title='edit'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Edit</span>";
	                    echo"</button>";
	                    echo"</form>";
	                    echo"<form  id='$row->id'  class='delete' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button type='submit'  class='btn btn-danger btn-xs' title='delete'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Delete</span>";
	                    echo"</button>";
	                    echo"</form>";
						echo"</div>";						
					}				
				}
			?>			
		</div>

		<div class="task" id="progress">
		<?php
				echo "<h3>Progress</h3>";
				foreach ($tasks as $row) {
					if ($row->estado == 2) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<form action='tasks/$row->id/edit' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button type='submit' class='btn btn-warning btn-xs' title='edit'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Edit</span>";
	                    echo"</button>";
	                    echo"</form>";
	                    echo"<form id='$row->id' class='delete' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button type='submit'  class='btn btn-danger btn-xs' title='delete'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Delete</span>";
	                    echo"</button>";
	                    echo"</form>";
						echo"</div>";
					}
				
				}
			?>			
		</div>
			
		<div class="task" id="finished">
			<?php
				echo "<h3>Finished</h3>";
				foreach ($tasks as $row) {
					if ($row->estado == 3) {						
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<form action='tasks/$row->id/edit' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button type='submit' class='btn btn-warning btn-xs' title='edit'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Edit</span>";
	                    echo"</button>";
	                    echo"</form>";
	                    echo"<form  id='$row->id' class='delete' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button  type='submit' class='btn btn-danger btn-xs' title='delete'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Delete</span>";
	                    echo"</button>";
	                    echo"</form>";
						echo"</div>";
					}
				
				}
			?>
		</div>
		
		<div class="task" id="verified">
			<?php
				echo "<h3>Verified</h3>";
				foreach ($tasks as $row) {
					if ($row->estado == 4) {
						echo"<div class='task1'>";
						echo"<span class='name'>$row->title</span><br/>";
						echo"<form action='tasks/$row->id/edit' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button type='submit' class='btn btn-warning btn-xs' title='edit'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Edit</span>";
	                    echo"</button>";
	                    echo"</form>";
	                    echo"<form id='$row->id' class='delete' method='get' enctype='multipart/form-data'role='form'>";
	                    echo"<button   type='submit' class='btn btn-danger btn-xs' title='delete'>";
	                    echo"<span class='glyphicon glyphicon-ban-circle'>Delete</span>";
	                    echo"</button>";
	                    echo"</form>";
						echo"</div>";
					}
				
				}
			?>
		</div>	


	</div>
	</div>

	<script type="text/javascript">
    $(document).ready(function() {
       $(".delete").on( "click", function() {
                var id = $(this).attr('id');
                if (confirm("Do you want delete this task?"))
				   {
					   $.ajax({
	                    url: '/tasks/'+id,
	                    type: 'DELETE',
	                    data: {id: id},
		                })
		                .done(function() {
		                    alert('Dato eliminado');
		                })
		                .fail(function() {
		                    console.log("Error");
		                })
		                .always(function() {
		                    location.reload();
		                });
					   }  
            }); 
    });
            
       
</script>
	@stop