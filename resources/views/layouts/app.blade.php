<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('includes.navbar')
  @if (Session::has('error') || Session::has('success'))
    <div class="container mt-3">
      @include('includes.messages')
    </div>
  @endif
  @yield('content')
  @include('includes.footer')

  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'article-ckeditor' );
  </script>
</body>
</html>
