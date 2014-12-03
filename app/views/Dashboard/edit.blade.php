@extends('layouts.base1')

@section('cabecera')
    @parent


@stop

@section('cuerpo')
	@parent

<style type="text/css">

#well{
  margin-top: 15%;
  margin-left: 0%;
	width: 100%;
	height: 65%;
  border:10%;
  border-color: black;
  border-radius: 30%
  text-align: left;

}
</style>



<div id="contain" class="container">
	<div id="row1" class="row">
      <div id="class1" class="col-md-6 col-md-offset-3">
        <div id="well" class="well well-sm">
          <form id="form" class="form-horizontal" action="update" method="post">
          <fieldset id="field">
            <legend class="text-center">Edit Task</legend>
    
            <!-- Title-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="title">Title</label>
              <div class="col-md-9">
                <input id="title" value='<?php echo $task->title; ?>' name="title" type="text" placeholder="Title" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="priority">Priority</label>
              <div class="col-md-9">
                    <select id="priority" name= "priority" class="balck" >
                    <option><?php echo $task->priority; ?></option>
                    <option>High</option>
                    <option>Medium </option>
                    <option>Low</option>
                    </select>
                 </div>   
            </div>
    
            <!-- Description-->     
             <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Write the description of the task" rows="5"> <?php echo $task->description?></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
  </div>
</div>
      @stop