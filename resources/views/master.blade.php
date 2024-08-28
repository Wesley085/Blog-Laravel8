<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $title }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{URL::asset("css/mdb.min.css")}}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{URL::asset("css/style.css")}}" />
</head>
<body>
      <header>
    <!-- Intro settings -->
    <style>
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }
      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }
    </style>


    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      @include('partials.nav')
    </nav>

    <div id="intro" class="p-5 text-center bg-light">
        @yield('header-intro')
    </div>

  </header>

  <main class="my-5">
    <div class="container">
        @yield('main')
    </div>
  </main>

  <footer class="bg-light text-lg-start">
    @include('partials.footer')

  </footer>

    <script type="text/javascript" src="{{URL::asset('js/mdb.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/scripts.js')}}s"></script>
</body>
</html>
