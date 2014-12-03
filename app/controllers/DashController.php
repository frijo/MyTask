<?php

class DashController extends \BaseController {

	
	public function index()
	{
		$tasks = Task::tasks();
		return View::make('Dashboard.index')->with('tasks', $tasks);
	}


	
	public function create()
	{
		return View::make('Dashboard.create');
	}

	public function store()
	{
		$rules = array(
			'title'    => 'required',
			'message'    => 'required|min:10',
			'priority' =>'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) {
			$title = Input::get('title');
			$description = Input::get('message');
			$priority = Input::get('priority');
			$user_id = Auth::user()->id;

			$task = New Task();
			$task->title = $title;
			$task->description = $description;
			$task->priority = $priority;
			$task->id_user = $user_id;
			$task->save();
		}
		
		return Redirect::to('tasks');

	}



	public function edit($id)
	{
		$task = Task::find($id);
		return View::make('Dashboard.edit')->with('task', $task);
	}


	public function update($id)
	{
		$rules = array(	
			'title'    => 'required',
			'message'    => 'required|min:10',
			'priority' =>'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) {
			$title = Input::get('title');
			$description = Input::get('message');
			$priority = Input::get('priority');

			$task = Task::find($id);
			$task->title = $title;
			$task->description = $description;
			$task->priority = $priority;
			$task->save();
		}

		return Redirect::to('tasks');
	}


	
	public function destroy($id)
	{
		
		$task = Task::find($id);
		$task->delete();
		return Redirect::to('tasks');
	}


}
