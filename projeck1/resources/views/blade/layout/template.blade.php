<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.0-beta3-dist\css\bootstrap.css')}}">

    <title>@yield('title')</title>
  </head>
  <body>
    
    @include('blade.layout.nav')
    @yield('content')
    
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <footer class="page-footer font-small bg-primary">
        <div class="container container-fluid text-center">
            Ini footer gaes
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap-5.0.0-beta3-dist\js\bootstrap.js')}}"></script>
  </body>
</html>