<?php

namespace App\Http\Controllers;

use Session;
use App\Todo; //uses Todo model
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
	public function index() { //outputs the todos
		$todos = Todo::all(); //puts all todo model info in a variable
		return view('todo')->with('todosMonkeyFace', $todos); //1st p is the name of the variable we will use in the view, the second p is the data we are passing in, so in this case the Todo model info.
	}

	public function store(Request $request) { //built in laravel THIS FUNCTION CREATES A TODO
		

		$todo = new Todo; //creates a new instance of the Todo model class

		$todo->todo = $request->todo; //the todo column in the table will be now have the request in.

		$todo->save();

		Session::flash('success', 'Your todo was created'); //success is the key

		return redirect()->back(); //laravel magic

	}

	public function delete($id) {
		$todo = Todo::find($id); //laravel magic
		$todo->delete();

		Session::flash('success', 'Your todo was deleted');

		return redirect()->back();
	}

	public function update($id) {
		$todo = Todo::find($id); //laravel magic
		return view('update')->with('todo', $todo);
	}

	public function save(Request $request, $id) {
		$todo = Todo::find($id);

		$todo->todo = $request->todo;
		$todo->save();

		Session::flash('success', 'Your todo was updated');

		return redirect()->route('todos');


	}

	public function completed($id) {
		$todo = Todo::find($id);

		$todo->completed = 1;

		$todo->save();

		Session::flash('success', 'Your todo was completed');

		return redirect()->back();
	}
}


