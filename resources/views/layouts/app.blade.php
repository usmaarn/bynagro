<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Scripts -->

    @env('local')
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endenv

    @production
        <link rel="stylesheet" href="{{ asset('build/assets/app.565ef6d2.css') }}">
        <script src="{{  asset('build/assets/app.0d313be0.js') }}"></script>
    @endproduction
</head>
<body>
    <div class="">

        <main>
            @yield('content')
        </main>

    </div>
</body>
</html>
