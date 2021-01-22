<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">

    <!-- Styles -->
    @include('core.dev.link')
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <p style="margin-top:5px;">Loading...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- Header -->
    @include('core.layouts.header')
    <!-- End Header -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- Footer -->
    @include('core.layouts.footer')
    <!-- End Footer -->

    <!-- Script -->
    @include('core.dev.script')
</body>
</html>
