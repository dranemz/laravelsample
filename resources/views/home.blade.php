@extends('templates.app')

@section('content')
  <div id="home" class="jumbotron jumbotron-fluid" style="background-image:url('/image/bg-4.jpg');background-repeat:no-repeat;background-size:100% 100%;min-height:100vh;color:#fff;padding-top:0px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color:transparent !important;">
      <a class="navbar-brand" href="#">MDEVZ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <div class="container" style="margin:0px">
        <h1 class="display-4">Hi! I'm Nard Devz</h1>
        <p class="lead">Welcome to my web portfolio</p>
    </div>

  </div>
@endsection