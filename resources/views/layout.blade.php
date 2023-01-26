<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'aprendible')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/sass/app.scss', 'resources/css/app.css',  'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/js/app.js') }}">
    <link rel="stylesheet" href="{{ asset('resources/sass/app.scss') }}">
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>
