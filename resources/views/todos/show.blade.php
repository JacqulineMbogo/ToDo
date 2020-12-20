<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>ToDo Item</title>
</head>
<body>

  

    <h2 class="text-center my-5">
         {{$todo->name}}

    </h2>
    <div class="row justify-content-center">
        <div class="col md-5">

            <div class="card card-default">

                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>