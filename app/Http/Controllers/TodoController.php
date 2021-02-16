<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
    	return view('welcome')->with('todos', Todo::all());
    }

   	public function get(Todo $todo){
   		return view('todo')->with('todo', $todo);
   	}

   	public function store(Request $request){
   		$this->validate($request, [
   			'name' => 'required|min:6|max:15',
   			'description' => 'required|max:150',
   		]);
   		$todo = new Todo();
   		$todo->name=  $request->input('name');
   		$todo->description= $request->input('description');
   		$todo->completed = false;
   		$todo->save();
      session()->flash('success', "Todo Created Successfully");
   		return redirect('/');
   	}

   	public function edit(Todo $todo){
   		return view('edit')->with('todo', $todo);
   	}

    public function update(Request $request, Todo $todo){
      $this->validate($request, [
        'name' => 'required|min:6|max:15',
        'description' => 'required|max:150',
      ]);
      $todo->name=  $request->input('name');
      $todo->description= $request->input('description');
      $todo->completed = false;
      $todo->save();
      session()->flash('success', "Todo Updated Successfully");
      return redirect('/');
    }

    public function destroy(Todo $todo){
      $todo->delete();
      session()->flash('success', "Todo Deleted Successfully");
      return redirect('/');
    }

    public function complete(Todo $todo){
      $todo->completed = true;
      $todo->save();
      return redirect('/');
    }
}