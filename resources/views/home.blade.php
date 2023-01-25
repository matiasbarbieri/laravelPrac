@extends('layout')

@section('title', 'Home')
@section('content')
    <link rel = "stylesheet" href = "{{ asset('resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/js/app.js') }}">
    <h1>Home</h1>
    @auth
        {{ auth()->user()->name }}
    @endauth
@endsection

