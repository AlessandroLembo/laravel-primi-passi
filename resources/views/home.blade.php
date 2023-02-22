<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center">
        <h1 class="text-success mt-5"> {{$greet}} </h1>
        <nav>
            <ul class="d-flex justify-content-around mt-4">
                @foreach($cities as $city)
                <li class="list-unstyled fs-2"><a href=" {{route('city', ['index' => $loop->index]) }} ">{{$city}}</a></li>
                @endforeach
            </ul>
        </nav>
        
    </div>
    
</body>

</html>