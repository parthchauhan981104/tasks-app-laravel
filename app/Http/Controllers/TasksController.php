<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;


class TasksController extends Controller
{

   public function index()
   {

   	return view('Tasks.index', ['tasks' => Task::all()]);

   }

   public function show(Task $task)  //route model binding - automatically fetches record from database with the id(lowercase of model name)
   {

   	return view('Tasks.show', ['task' => $task]);

   }

   public function create() 
   {

   	return view('Tasks.create');

   }

   public function store()
   {

   	//show errors in blade file if validation fails
   	
   	$this->validate(request(), [   
   		'name' => 'required|max:250',
   		'description' => 'required'
   	]);

   	$data=request()->all();

   	$task = new Task();
   	$task->name = $data['name'];
   	$task->description = $data['description'];
   	$task->completed = false;
   	$task->save();

   	//display flash message to user in app.blade file
   	session()->flash('success', 'Task created successfully');


   	return redirect('/tasks');

   }

   public function edit(Task $task) //route model binding
   {

   	return view('Tasks.edit', ['task' => $task]);

   }

   public function update()
   {

   	//show errors in blade file if validation fails
   	
   	$this->validate(request(), [   
   		'name' => 'required|max:250',
   		'description' => 'required'
   	]);

   	$data=request()->all();

   	$task = Task::find($data['taskId']);
   	$task->name = $data['name'];
   	$task->description = $data['description'];
   	$task->save();

   	//display flash message to user in app.blade file
   	session()->flash('success', 'Task updated successfully');

   	return redirect('/tasks');

   }

   public function complete(Task $task)
   {

   	$task->completed = true;
   	$task->save();

   	//display flash message to user in app.blade file
   	session()->flash('success', 'Task marked completed successfully');

   	return redirect('/tasks');

   }


   public function destroy(Task $task) //route model binding
   {

   	$task->delete();

   	//display flash message to user in app.blade file
   	session()->flash('success', 'Task deleted successfully');

   	return redirect('/tasks');

   }

   


}
