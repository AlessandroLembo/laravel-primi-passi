<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City</title>

     {{-- Bootstrap --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-around align-items-center">
           <h1> {{$city}} </h1>
           <a href="{{route('home')}}" class="fs-2">Torna alla home</a>
        </div>
    </div>
    
</body>
</html>