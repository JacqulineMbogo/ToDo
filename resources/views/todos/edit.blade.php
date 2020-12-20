@extends('layout.app')

@section('title')
  Edit ToDo
@endsection
@section('content')


<form action="/update-todo" method="POST">

@csrf
    <h1 class="text-center my-5">Edit ToDo</h2>
        <!-- '$todos' variable key being passed -->
          <div class="container">
              <div class="row justify-content-center">
              <div class="col md-8 ">
                  <div class="card card-default">
                      <div class="card-header">
                          Update Item
                      </div>
                      <!-- for errors -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

                      <div class="card-body">

                        <input type="hidden" name="todo_id" value="{{$todo->id}}">
                        <div class="form-group">

                            <input type="text" class="form-control" name ="name" placeholder="name" value="{{$todo->name}}">
                            
                        </div>

                        <div class="form-group">

                            <textarea class="textarea form-control" name = "description" placeholder="description" > {{$todo->description}}
                            </textarea>
                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-success">Update ToDo</button>
                        </div>
      
                      </div>
                      
                  </div>
              </div>
      
          </div>
      
             
      </div>
  
</form>
    
@endsection