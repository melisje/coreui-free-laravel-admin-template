<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="@yield('page-description','CoreUI - Open Source Bootstrap Admin Template')">
        <meta name="author" content="@yield('page-author','Łukasz Holeczek')">
        <meta name="keyword" content="@yield('page-keywords','Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard')">
        <title>@yield('page-title','CoreUI Free Bootstrap Admin Template')</title>
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="@yield('page-theme-color','#ffffff')">
        <!-- Icons-->
        <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
        <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
        <!-- Main styles for this application-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')

        <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
    </head>


    <body class="c-app">

        @section('c-sidebar')
            @include('layouts.partials.c-sidebar')
        @show


        <div class="c-wrapper">
            @section('c-header')
                @include('layouts.partials.c-header')
            @show

            @section('c-body')
                @include('layouts.partials.c-body')
            @show

            @section('c-footer')
                @include('layouts.partials.c-footer')
            @show
        </div>
        <!-- CoreUI and necessary plugins-->
        <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
        <script src="{{ asset('js/coreui-utils.js') }}"></script>
        @yield('javascript')
    </body>

</html>

