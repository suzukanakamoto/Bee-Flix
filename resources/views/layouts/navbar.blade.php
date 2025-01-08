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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="{{ url('/') }}">BeeFlix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('/genres/1')}}">Drama</a>
                <a class="nav-link" href="{{ url('/genres/2')}}">Kids</a>
                <a class="nav-link" href="{{ url('/genres/3')}}">Tv Show</a>
              </div>
            </div>
          </nav>

        </div>
    </div>

@yield('navbar')
</html>


