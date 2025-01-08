@extends('layouts.navbar')


@section('navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="/css/bootstrap.css">




    <title>BeeFlix</title>
</head>


        <div class="container">
               <h2>Drama</h2>
                <div class="row">
                    @foreach ($movie as $movies)
                @if($movies->genres_id == 1)

                    <div class="col">
                    <div class="card deck">
                        <div class="card">
                            <img class="card-img-top" src="{{$movies->photo}}" >
                        <div class="card-body">
                            <p class="card-title text-center">{{$movies->title}}</p>
                        </div>
                        <div class="card-footer text-center bg-primary">
                            <a class="text-dark" href="{{ url('/movies/'.$movies->id) }}">LIHAT FILM</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

        <h2>Kids</h2>
                <div class="row">
                    @foreach ($movie as $movies)
                @if($movies->genres_id == 2)

                    <div class="col">
                    <div class="card deck">
                        <div class="card">
                            <img class="card-img-top" src="{{$movies->photo}}" >
                        <div class="card-body">
                            <p class="card-title text-center">{{$movies->title}}</p>
                        </div>
                        <div class="card-footer text-center bg-primary">
                            <a class="text-dark" href="{{ url('/movies/'.$movies->id) }}">LIHAT FILM</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <h2>Tv Show</h2>
                <div class="row">
                    @foreach ($movie as $movies)
                @if($movies->genres_id == 3)

                    <div class="col">
                    <div class="card deck">
                        <div class="card">
                            <img class="card-img-top" src="{{$movies->photo}}" >
                        <div class="card-body">
                            <p class="card-title text-center">{{$movies->title}}</p>
                        </div>
                        <div class="card-footer text-center bg-primary">
                            <a class="text-dark" href="{{ url('/movies/'.$movies->id) }}">LIHAT FILM</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

</div>
</body>

@endsection('navbar')

</html>
