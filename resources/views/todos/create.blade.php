@extends('layout.app')

@section('title')
    New ToDo
@endsection
@section('content')


<form action="/store-todo" method="POST">

@csrf
    <h1 class="text-center my-5">New ToDo</h2>
        <!-- '$todos' variable key being passed -->
          <div class="container">
              <div class="row justify-content-center">
              <div class="col md-8 ">
                  <div class="card card-default">
                      <div class="card-header">
                          Create New Item
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
                        <div class="form-group">

                            <input type="text" class="form-control" name ="name" placeholder="name">
                            
                        </div>

                        <div class="form-group">

                            <textarea class="textarea form-control" name = "description" placeholder="description"></textarea>
                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-success">Create ToDo</button>
                        </div>
      
                      </div>
                      
                  </div>
              </div>
      
          </div>
      
             
      </div>
  
</form>
    
@endsection