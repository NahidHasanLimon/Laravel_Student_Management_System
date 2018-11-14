<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title','Student Manegment System')
    </title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parsleyStyle.css') }}">
  </head>
  <body>
    <!-- <h1>First Retrieve Data Form Database</h1> -->

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Student Manegment System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('index') }}">Home</a></li>
            <li class=""><a href="{{ route('studentList') }}">Student List</a></li>
            <li><a href="{{ route('createStudent') }}">Create Student</a></li>
            <li><a href="{{ route('index') }}">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>

            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li class="active"><a href="{{ route('home') }}">DASHBOARD</a></li>
            @else
            <li class="active"><a href="{{ route('register') }}">Register</a></li>
            <li class=""><a href="{{ route('login') }}">Login</a></li>
            @endif



          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <div class="container">
     @yield('content')

    </div>

  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('Parsley/dist/parsley.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>

  </body>
</html>
