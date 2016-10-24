<!DOCTYPE html>
<html>
<head>
  <title>
    {{ --Yield the title if it exists, else default to 'Foobooks' --}}
    @yield('title', 'Foobooks')
  </title>

  <meta charset="utf-8"/>
  <link href="/css/foobooks.css" type="text/css" rel="stylesheet"/>

  @yield('head')
</head>

<body>
  <header>
    <img
    src='http://making-the-internet.s3.amazonaws.com/laravel-foobooks-logo@2x.png'
    style='width:300px'
    alt='Foobooks Logo'>
  </header>

  <section>
    @yield('content')
  </section>

  <footer>
    &copy; {{ date('Y') }}
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  @yield('body')
     
</body>
</html>
