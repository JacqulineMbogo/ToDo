@extends('layout.app')

@section('title')
    ToDo List
@endsection
@section('content')


<body>
    <h1 class="text-center my-5">ToDo List</h2>
  <!-- '$todos' variable key being passed -->
    <div class="container">
        <div class="row justify-content-center">
        <div class="col md-8 ">
            <div class="card card-default">
                <div class="card-header">
                    ToDos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">{{ $todo ->name}}</li>

                            @if (!$todo->completed)
                               
                            <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-right">Complete</a>
                            
                            @endif
                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                            
                        @endforeach

                </ul>

                </div>
                
            </div>
        </div>

    </div>

       
</div>  
          
</body>

    
@endsection