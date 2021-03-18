<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Type</th>
                <th scope="col">Alcohol-Level</th>
                <th scope="col">IBU</th>
                <th scope="col">Color</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($beers as $beer)
              <tr>
                <th scope="row">{{$beer->id}}</th>
                <td>{{$beer->brand}}</td>
                <td>{{$beer->type}}</td>
                <td>{{$beer->alcoholLevel}}</td>
                <td>{{$beer->ibu}}</td>
                <td>{{$beer->color}}</td>
                <td>{{$beer->description}}</td>
                <td><img class="img-resize" src="{{$beer->beerImg}}" alt=""></td>
              </tr>
              @endforeach
    </body>
</html>
