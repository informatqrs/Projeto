<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titulo')</title>
  </head>
  <body>
      @yield('conteudo')
  </body>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
</html>
