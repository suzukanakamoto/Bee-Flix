@extends('layouts.navbar')

@section('navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="/css/bootstrap.css">
     

    <title>Detail</title>

</head>

<body>
    <div class="container bg-white">
        <div class="row">
            <div class="col">
             <img class="card-img-top" src="/{{$movie->photo}}" >
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="card-title">
                           <h3>{{$movie->title}}</h3>
                           @if ($movie->rating)
                            @for ($i = 0; $i < $movie->rating; $i++)
                            <img style='width : 20px;' src='/img/star.png'></i>
                            @endfor
                           @endif
                           <h3 class='text-center'>{{$movie->description}}</h3>

                           <p>Category : <a href="{{ url('/genres/'.$movie->genres->id)}}">{{$movie->genres->name}}</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="card-title">
                        <h3>Episode</h3>
                        </div>
                        @foreach ($episode as $episodes)


                        <div class="row">
                            <div class="col">
                                <h3>{{$episodes->episodes}}</h3>
                            </div>
                            <div class="col">
                                <h3>{{$episodes->titles}}</h3>
                                <div class="hv-100"></div>
                            </div>

                        </div>
                        @endforeach

                        {{$episode->links()}}

                    </div>
                    </div>
                </div>
            </div>

</body>
@endsection('navbar')
</html>
