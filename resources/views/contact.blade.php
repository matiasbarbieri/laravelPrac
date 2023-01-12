@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input name="name" placeholder="Nombre... " value="matias"><br>
        <input type="email" name="email" placeholder="Email... " value="matias@matias.com"><br>
        <input name="subject" placeholder="Asunto... " value="blabla"><br>
        <textarea name="content" placeholder="Mensaje... ">Mensaje de Prueba</textarea><br>
        <button>Enviar</button>
    </form>
@endsection

