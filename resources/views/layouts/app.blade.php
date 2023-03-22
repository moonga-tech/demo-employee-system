<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.6.1.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        @include('layouts.header')

        <main class="app-body-content">
            @yield('content')
        </main>

        <footer>
            <p class="text-center">EOS - &copy; 2023;</p>
        </footer>
    </div>
</body></html>