<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //

    public function index(){


        //fetch all data and display it in page
     /*   $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);*/
        //short code for this is

        return view('todos.index')->with('todos',Todo::all());


    }

    public function show($todoId){

        //dd($todoId);
        $todo = Todo::find($todoId);

        return view('todos.show')->with('todo',$todo );

    }
    public function create(){

        return view('todos.create');
    }

    public function store(){

        //dd(request()->all());

        $this->validate(request(),
        [

            'name'=>'required',
            'description'=>'required'

        ]
    
    );
        $data = request()->all();

        $todo = new ToDo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success','ToDo created successfully');
        return redirect('/todos');

    }

    public function edit($todoId){


        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo',$todo );


    }

    public function update(){

        $this->validate(request(),
        [

            'name'=>'required',
            'description'=>'required'

        ]
    
    );
        $data = request()->all();

        $todo = Todo::find($data['todo_id']);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success','ToDo updated successfully');

        return redirect('/todos');


    }

    public function delete($todoId){

        $todo = Todo::find($todoId);
        $todo->delete();

        session()->flash('success','ToDo deleted successfully');
        return redirect('/todos');


    }

    public function complete($todoId){

        $todo = Todo::find($todoId);
        $todo->completed = true;

        $todo->save();

        session()->flash('success','ToDo completed successfully');
        return redirect('/todos');


    }
}
