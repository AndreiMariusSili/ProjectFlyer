<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Andrei Sili</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css ">
    <link rel="stylesheet" type="text/css" href="/css/libraries.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Project Flyer</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            @if($signedIn)
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{ $user->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/account">Manage Account</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/logout">Logout</a></li>
                </ul>
              </li>
            @else
              <li><a href="/register">Register</a></li>
              <li><a href="/login">Login</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

        @yield('content')

    </div>

    <script type="text/javascript" src="/js/libraries.js"></script>
    <script>
      Dropzone.options.addPhotosForm = {
        paramName: 'photo',
        maxFilesize: 10,
        acceptedFiles: '.jpg, .jpeg, .png, .bmp',
        dictDefaultMessage: 'Drop photos here or click to upload.'
      };
    </script>

    @include('flash')
</body>
</html>