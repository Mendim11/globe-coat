<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Globe Coat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>
    <!-- Navbar, if any -->
    @include('includes.navbar') <!-- Adjusted to the correct path -->

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer, if any -->
    @include('includes.footer') <!-- Adjusted to the correct path -->

    <!-- Add your JS files -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>

</html>