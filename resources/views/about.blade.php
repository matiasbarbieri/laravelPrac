@extends('layout')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid" src="/img/undraw_software_engineer_re_tnjc.svg" alt="">
        </div>
        <div class="col-12 col-lg-6 my-5">
            <h1 class="display-5 text-primary ">Quién soy</h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum deserunt eligendi nobis tenetur anim.
            </p>
            <a class="btn btn-lg btn-block btn-primary mx-2 " href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index')}}">Portfolio</a>
        </div>
    </div>
</div>
    <link rel = "stylesheet" href = "{{ asset('resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/js/app.js') }}">
@endsection

