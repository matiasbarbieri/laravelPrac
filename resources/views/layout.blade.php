<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'aprendible')</title>
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
    @include('partials.nav')
    @include('partials.session-status')
    @yield('content')
</body>
</html>
