<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Font Google -->
        <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap"
            rel="stylesheet">

        <!-- Favicons -->
        @include('_partials._favicons')

        <!-- font awesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
            crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    </head>
    <body>
        <div id="app">

            <div class="wrapper">
                @if (Auth::check())
                    @include('_partials.navbar')
                @endif

                @include('_partials._navs')

                <!-- Start Content -->
                {{ $slot }}

                <!-- Footer -->
                @include('_partials._footer')
            </div>
        </div>

        <!-- Mobile Navigation -->
        <script src="/js/menuOverlay.js"></script>
    </body>
</html>

