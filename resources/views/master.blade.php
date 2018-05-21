<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>

  <link rel="icon" type="image/png" href="{{url('image/logo.png')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  @yield('css')

  <style type="text/css">
    body {
      display:flex;
      min-height:100vh;
      flex-direction: column;
    }

    main{
      flex:1 0 auto;
    }
  </style>

</head>
<body>
  <header>
    @include('navbar')
  </header>
  
  <main>
    @yield('content')
  </main>

  @include('footer')

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>
  @yield('js')

</body>
</html>