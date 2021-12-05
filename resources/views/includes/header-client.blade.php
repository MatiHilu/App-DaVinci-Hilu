<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      label{

        font-size: 1.2rem;
        margin-top: 20px;
        margin-bottom: 2px;
      }
    </style>

    <title>{{ $user->name }} CV</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/my-portfolio')  }}">Hola {{ $user->name }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/my-portfolio')  }}">Mis datos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/my-portfolio-edit')  }}">Editar datos personales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio/{{ $user->slug }}" tabindex="-1">Ver portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout-user') }}" tabindex="-1">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>