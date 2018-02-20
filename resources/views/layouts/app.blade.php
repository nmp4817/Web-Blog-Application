<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'WebBlog') }}</title>
      <link rel='shortcut icon' type='image/x-icon' href="{{ asset('images/icons/favicon.ico') }}" />
      <link rel="apple-touch-icon-precomposed" href="{{ asset('images/icons/apple-touch-icon-precomposed.png') }}">
      <link rel="apple-touch-icon-precomposed" href="{{ asset('images/icons/apple-touch-icon-72x72-precomposed.png') }}">
      <link rel="apple-touch-icon-precomposed" href="{{ asset('images/icons/apple-touch-icon-114x114-precomposed.png') }}">
      <link rel="apple-touch-icon-precomposed" href="{{ asset('images/icons/apple-touch-icon-144x144-precomposed.png') }}">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          @include('inc.header')
          @include('inc.navbar')
          @include('inc.messages')
          @yield('content')
          @include('inc.footer')
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'article-ckeditor' );
      </script>
  </body>
</html>
