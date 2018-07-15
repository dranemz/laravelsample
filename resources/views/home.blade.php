@extends('templates.app')

@section('content')
    <div class="jumbotron jumbotron-fluid" style="background-image:url('/image/fabian-grohs-616504-unsplash.jpg');background-repeat:no-repeat;background-size:100%;min-height:600px;color:#fff;padding-top:0px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color:transparent !important;">
  <a class="navbar-brand" href="#">MDEVZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style="margin:0px">
    <h1 class="display-4">Hi! I'm Nard Devz</h1>
    <p class="lead">Welcome to my simple web portfolio and  feel free to visit and rate my works.</p>
</div>

    </div>
@endsection

@section('sidebar')
    @parent
    <p>Appended to the sidebar</p>
@endsection