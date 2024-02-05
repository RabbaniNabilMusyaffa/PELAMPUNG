<!DOCTYPE html>
<html>
  <head>
    <title> - PELAMPUNG -</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.style.css') }}" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{asset('catalog/js/modernizr.js')}}"></script>

    <style>
      body {
          display: flex;
          flex-direction: column;
          min-height: 100vh;
          /* padding-top: 30px;  */
      }



      section {
          flex: 1;
      }
  </style>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

    <section>
      @include('catalog.svg')
    </section>

    <section>
      @include('catalog.nav')
    </section>

    <section>
      @yield('content')
    </section>
      
    <section>
      @include('catalog.footer')
    </section>

  <script src="{{ asset('catalog/js/jquery-1.11.0.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{ asset('catalog/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('catalog/js/plugins.js') }}"></script>
  <script type="text/javascript" src="{{ asset('catalog/js/script.js') }}"></script>
  </body>
</html>