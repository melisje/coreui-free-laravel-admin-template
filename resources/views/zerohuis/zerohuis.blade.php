<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page-title', config('app.name', 'Laravel') )</title>


        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon-zh/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon-zh/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon-zh/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon-zh/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon-zh/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon-zh/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon-zh/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon-zh/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon-zh/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon-zh/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-zh/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ 'assets/favicon-zh/favicon-96x96.png' }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-zh/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('assets/favicon-zh/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="@yield('page-theme-color','#ffffff')">


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/zerohuis.css') }}" rel="stylesheet">
        @stack('css')
    </head>
    <body>
        @include('zerohuis.partials._sdap_env')
        <div id="app">
            @include('zerohuis.partials._navbar')

            <main class="py-2">
                <div class="{{ isset($container) && $container ? 'container' : '' }} px-sm-2 ">
                    @include('layouts._partials._messagebag')
                    @yield('content')
                </div>
            </main>
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        @include('zerohuis.partials._scripts')
        @include('zerohuis.partials._animation')

        @stack('scripts')

    </body>
</html>
