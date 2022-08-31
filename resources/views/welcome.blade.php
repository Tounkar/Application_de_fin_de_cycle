<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Acceuil</title>
    <style>
      body{
        overflow-y: hidden;
      }
    </style>
  </head> 
  <body>
    <div class="content">
      <div class="site-blocks-cover">
        <div class="img-wrap">
          <div class="owl-carousel slide-one-item hero-slider">
            <div class="slide">
              <img src="{{ asset('images/ab.png')}}"
                   alt="Free Website Template by Free-Template.co">
            </div>
            <div class="slide">
              <img src="{{ asset('images/abc.jpg')}}"
                   alt="Free Website Template by Free-Template.co">
            </div>
            <div class="slide">
              <img src="{{ asset('images/abcd.jpg')}}"
                   alt="Free Website Template by Free-Template.co">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto align-self-center">
              <div class="intro">
                <div class="heading">
                  <h1 class="text-white font-weight-bold">Bienvenue</h1>
                </div>
                <div class="text sub-text">
                  <p>
                    Chez Enical livraison
                  </p>
                  <p>
                    <a href="{{ route('pageclient') }}" target="_blank" class="btn btn-outline-primn-md btn-pill">je suis client</a>
                  </p>
                  <p>
                    <a href="{{ route('pagelivreur') }}" target="_blank" class="btn btn-outline-primn-md btn-pill">je suis livreur</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END .site-blocks-cover -->
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>
