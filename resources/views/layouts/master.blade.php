
<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Musico</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body>

    <header>
      @include('layouts.navbar')

      @yield('jumbotron')
    </header>

    <main class="py4" role="main">
      @yield('content')
    </main>

    @include('layouts.footer')

    @yield('additionaljs')
  </body>
</html>
