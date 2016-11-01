<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Andrei Sili</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css ">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
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
        @if($signedIn)
          <p class="navbar-text navbar-right">
            Hello, {{ $user->name }}
          </p>
        @endif
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
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
        acceptedFiles: '.jpg, .jpeg, .png, .bmp' 
      };
    </script>

    @include('flash')
</body>
</html>