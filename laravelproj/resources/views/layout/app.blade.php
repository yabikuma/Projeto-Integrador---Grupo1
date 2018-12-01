<?php

    session_start();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>GenVintage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
  </head>
  <body>
<div class="container-fluid">


<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand mr-auto" href="#"><img src="/img/Gen-Vintage-logo_claro_small.png" alt="logo-header"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quem Somos</a>
      </li>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categorias
      </a>
      <div class="dropdown-menu">



        <a class="dropdown-item" href="/produtos/lista/3">Moedas</a>
        <a class="dropdown-item" href="/produtos/lista/4">Vinil</a>
        <a class="dropdown-item" href="/produtos/lista/2">Video Games</a>
        <a class="dropdown-item" href="/produtos/lista/1">Brinquedos</a>
    
    
      </div>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/faq">FAQ</a>
      </li>
    </ul>

      <a class="carrinho" href="index.php"><img src="/img/carrinho1.png" alt="logo-header"></a>

    <ul class="nav navbar-nav nav-link ml-auto" id="header-button-list">
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
          </li>
          <li class="nav-item">
              @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
              @endif
          </li>
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest

   </ul>
  </div>
</nav>
</div>

            @yield('content')


<footer class="bg-dark text-white mt-4 container fbottom" >
        <div class="container-fluid py-3">
            <!-- <div class="row">
                <div class="col-md-3">
                    <h5> </h5></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div> -->
            <div class="row">
                <div class="col-md-6"> <span class="small"><br><img src="/img/Gen-Vintage-logo_horiz.png" alt="" height=120> </span></div>
                <div class="col-md-3">

                </div>

                <div class="col-md-3 text-right small align-self-end">
                  <ul class="list-unstyled" id="footer_icons">
                    <li> <p> <a href="http://twitter.com" target="_blank"> <img src="/img/twitter_logo.png" alt="Twitter_Logo" height=40> </a>
                            <a href="http://instagram.com" target="_blank"> <img src="/img/instagram_logo.png" alt="Instagram_Logo" height=40> </a>
                            <a href="http://facebook.com" target="_blank"> <img src="/img/facebook_logo.png" alt="Facebook_Logo" height=40> </a></p> </li>
                  </ul>
                  ©2018 Todos os direitos reservados.</div>
            </div>
        </div>
    </footer>


  	<!-- ./Footer -->














    <!--Plu-glins do Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
