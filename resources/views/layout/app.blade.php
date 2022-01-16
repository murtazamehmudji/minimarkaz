<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mini Markaz Solutions</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logos/logo-shortcut.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('/css/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/navigation.css') }}" id="navigation_menu">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" id="main_styles">

    <link href="{{ url('/fonts/css0f7c.css?family=Open+Sans:300,400,600,700,800') }}" rel="stylesheet">
    <link href="{{ url('/fonts/css2a55.css?family=Poppins:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
    <link href="{{ url('/fonts/css6ccb.css?family=Libre+Baskerville:400,400i,700') }}" rel="stylesheet">
    <link href="{{ url('/fonts/css0fc8.css?family=Montserrat:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">

    @yield('page_styles')
</head>

<body>
    @include('components.loader')
    {{-- @include('components.topbar') --}}
    @include('components.header')

    @yield('content')
    
    @include('components.footer')

    <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script src="{{ url('/js/plugins.js') }}"></script>
    <script src="{{ url('/js/navigation.js') }}"></script>
    <script src="{{ url('/js/navigation.fixed.js') }}"></script>
    <script src="{{ url('/js/map.js') }}"></script>

    @yield('page_scripts')

    <script src="{{ url('/js/main.js') }}"></script>
</body>

</html>