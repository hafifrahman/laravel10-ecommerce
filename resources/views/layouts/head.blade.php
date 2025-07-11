<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" href="{{ asset('storage/images/favicon.ico') }}">
<link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
<meta name="theme-color" content="#e87316">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Surfside Media">
<meta name="msapplication-TileImage" content="{{ asset('storage/images/favicon.ico') }}">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="preconnect" href="https://fonts.gstatic.com">

<title>@yield('title') | {{ config('app.name') }}</title>

<link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome-6.7.2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick-theme.css') }}">
<link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo4.css') }}">
<style>
  .h-logo {
    max-width: 185px !important;
  }

  .f-logo {
    max-width: 220px !important;
  }

  @media only screen and (max-width: 600px) {
    .h-logo {
      max-width: 110px !important;
    }
  }
</style>
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

@stack('styles')
