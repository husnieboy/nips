<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!DOCTYPE html>
<html lang="en">
      <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Nippi.com - Pinoy Sa Japan</title>

      <!--Bootstrap core CSS-->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- Custom styles for this template -->

      <link href="css/custom.css" rel="stylesheet">
      <link href="css/responsive-style.css" rel="stylesheet">  
      <link href="css/weather-icons.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
      <link href="css/lightbox.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/loaders.css"/>
      <style></style>
      </head>

      <body>
          <!--<div class="loader loader-bg">
        <div class="loader-inner ball-pulse-rise">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>-->
<header>
        <div class="small-top">
            <div class="container">
            <div class="col-lg-4 date-sec hidden-sm-down">
                <div id="Date"></div>
            </div>
            <div class="col-lg-3 offset-lg-5">
                <div class="social-icon"> <a target="_blank" href="#" class=" fa fa-facebook"></a> <a target="_blank" href="#" class=" fa fa-twitter"></a> <a target="_blank" href="#" class=" fa fa-google-plus"></a> <a target="_blank" href="#" class=" fa fa-linkedin"></a> <a target="_blank" href="#" class=" fa fa-youtube"></a> <a target="_blank" href="#" class=" fa fa-vimeo-square"></a> </div>
            </div>
            </div>
        </div>
        <div class="top-head left">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <h1><img src="img/nippi_logo.png">Nippi.com<small><span class="logo_subtitle" >Pinoy Sa Japan</small></h1>
                    </div>


          <div class="col-md-6 col-lg-5 offset-lg-3 admin-bar hidden-sm-down">
            <nav class="nav nav-inline"> 

              <a   href="{{ route('register') }}"  class="nav-link">  Register</span>
                
              </a> 
              
              <a   href="{{ route('login') }}"  class="nav-link">  Login</span>
                
              </a> 
            
            
              </nav>

          </div>


                </div>
            </div>
        </div>

</header>
 
  @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
