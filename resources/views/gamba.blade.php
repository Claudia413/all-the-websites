<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gamba - Build it faster</title>
  <!-- Design can be found here: https://themeforest.net/item/gamba-organic-psd-template/16928343?ref=Dataasata -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Cuprum" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ URL::asset('/css/gamba.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="d-flex align-items-center">
          <span class="icon fas fa-circle"></span>
          <span>Order Online</span>
          <span class="icon far fa-clock"></span>
          <span>7:30 am - 11:00 pm</span>
        </div>
        <div class="ml-auto d-flex align-items-center">
          <span class="icon fas fa-user"></span>
          <span class="mr-6p">My Account</span>
          <span class="icon fas fa-shopping-cart"></span>
        </div>
      </div>
    </div>
    <hr/>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent row d-flex align-items-center">
        <a class="navbar-brand" href="#">Gamba</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto d-flex align-items-center">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Shop</a>
            <a class="nav-item nav-link" href="#">Blog</a>
            <a class="nav-item nav-link" href="#">Pages</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <span class="fas fa-search"></span>
          </div>
        </div>
      </nav>
    </div>
    <div class="container header-content">
      <section class="welcome">
        <div class="deco d-flex align-items-center justify-content-center">
          <span class="underline"></span>
          <span class="fas fa-leaf"></span>
          <span class="fas fa-leaf"></span>
          <span class="fas fa-leaf"></span>
          <span class="underline"></span>
        </div>
        <div class="text-arc">
          <span class="char1">H</span>
          <span class="char2">E</span>
          <span class="char3">A</span>
          <span class="char4">L</span>
          <span class="char5">T</span>
          <span class="char6">H</span>
          <span class="char7">Y</span>
          <span class="char8"> </span>
          <span class="char9">F</span>
          <span class="char10">O</span>
          <span class="char11">O</span>
          <span class="char12">D</span>
        </div>
        <div>
          <h1>Organic</h1>
          <h2 class="subtitle">Good for natural, good for you</h2>
          <a class=" btn btn-primary">
            Shop now
          </a>
        </div>
      </section>
    </div>
  </div>
  <!-- End of header -->
  <section class="introduction container">
    <h3>Welcome to Gamba</h3>
    <div class="usp-block">
      <div class="icon-container">
        <span class="fas fa-frog" alt="frog icon"></span>
      </div>
      <h5>100% Natural</h5>
      <p>
        We care about what you eat. We want to produce food which nourishes your body and tastes delicious.
      </p>
    </div>
    <div class="usp-block">
      <div class="icon-container">
        <span class="fas fa-frog" alt="frog icon" ></span>
      </div>
      <h5>Organic Products</h5>
      <p>
        We care about what you eat. We want to produce food which nourishes your body and tastes delicious.
      </p>
    </div>
    <div class="center-img">
      <img src="/imgs/gamba/stayhealthy.jpg" class="introduction-img" alt="a variety of veggies; cucumber, pepper, zuchinni, lemon, herbs, apples" />
      <div class="ab-circle">
        Stay Healthy
      </div>
    </div>
    <div class="usp-block">
      <div class="icon-container">
        <span class="fas fa-frog" alt="frog icon" ></span>
      </div>
      <h5>Always Fresh</h5>
      <p>
        We care about what you eat. We want to produce food which nourishes your body and tastes delicious.
      </p>
    </div><div class="usp-block">
      <div class="icon-container">
        <span class="fas fa-frog" alt="frog icon" ></span>
      </div>
      <h5>Best Quality</h5>
      <p>
        We care about what you eat. We want to produce food which nourishes your body and tastes delicious.
      </p>
    </div>
  </section>
</body>
</html>
