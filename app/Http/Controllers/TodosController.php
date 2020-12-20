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
}
