<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Scripts -->

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}" /> --}}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="" id="app">

        <main>
            @yield('wrapper')
        </main>

    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
