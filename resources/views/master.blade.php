<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{!! $payload->title !!}</title>
    <meta name="keywords" content="{!! $payload->keywords !!}">
    <meta name="description" content="{!!$payload->description !!}">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
    {{-- link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/theme.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ elixir('css/combined.css') }}">

    <link rel="shortcut icon" href="img3/ico/32.png" sizes="32x32" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" href="img3/ico/60.png" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img3/ico/72.png" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img3/ico/120.png" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img3/ico/152.png" type="image/png"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>

  <body id="home">
    <div class="container-fluid">
      <div class="menu-wrapper">
        <a href="#" class="close-menu visible-xs"><i class="icon-close"></i></a>
        <h3 class="visible-xs">Navigation</h3>
        <ul class="nav-list text-center effect">
          @foreach($links as $link)
          <li @if(Request::is($link->url.'.html'))class="active"@endif><a href="/{{ $link->url }}.html">{!! $link->nazwa !!}</a></li>
          @endforeach
        </ul>
        <div class="visible-xs mt-info">
          <h3>Latest news</h3>
          <ul>
            <li><a href="blog-article.html">New collection</a></li>
            <li><a href="blog-article.html">Home Sweet Home: Turn...</a></li>
            <li><a href="blog-article.html">The Prisoner of Benda</a></li>
          </ul>
          <a href="http://demo.angelostudio.net" class="btn btn-outline-w">More Templates</a>
        </div>
      </div>	
    </div>	

    <div id="wrap">
      <div id="main-nav" class="">
        <div class="container-fluid">	
          <div class="nav-header">
            <a href="index.html" class="nav-brand">lalampa</a>
            <a class="nav-icon pull-right visible-xs menu-link" href="#"><i class="icon-menu2"></i></a>
            <a class="nav-icon-outline cart pull-right" href="cart.html"><i class="icon-cart"></i><span class="badge">3</span></a>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            @yield('content')
          </div>
        </div>
      </div>



      <footer>
        <div class="container-fluid">
          <div class="pull-left copyright">
            <p>STELLA <b>SHOP</b> &copy; 2014. Designed by <a href="http://www.angelostudio.net" target="_blank">Angelo Studio</a>.</p>
            <ul class="nav-list effect">
              <li><a href="terms-conditions.html">Delivery & Returns</a></li>
              <li><a href="terms-conditions.html">Terms & Conditions</a></li>
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="faq.html">FAQ</a></li>
            </ul>	
          </div>

          <div class="pull-right copyright">
            <ul class="social-links">
              <li><a href="https://twitter.com/angelo_studio"><i class="icon-twitter"></i></a></li>
              <li><a href="http://dribbble.com/angelo_studio"><i class="icon-dribbble"></i></a></li>
              <li><a href="http://www.pinterest.com/angelostudio/"><i class="icon-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>


    </div>

    {{-- <script type="text/javascript" src="{{elixir('js/vendor.js')}}"></script>
  <script type="text/javascript" src="{{elixir('js/app.js')}}"></script>--}}
  <script type="text/javascript" src="{{elixir('js/combined.js')}}"></script>
</body>
</html>
