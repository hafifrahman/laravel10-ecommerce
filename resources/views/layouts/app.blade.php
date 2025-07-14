<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>@yield('title') | {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="theme-color4 light ltr">
    @include('layouts.header')

    @yield('content')

    <div id="qvmodal"></div>

    @if (!Auth::check() || Auth::user()->role != 'admin')
      @include('layouts.footer')
    @endif

    <div class="tap-to-top">
      <a href="#home">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <div class="bg-overlay"></div>

  </body>

</html>
