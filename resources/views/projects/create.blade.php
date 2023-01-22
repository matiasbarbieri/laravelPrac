@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Titulo del proyecto" >
        <br>
        <input type="text" name="url" placeholder="Url del proyecto" >
        <br>
        <textarea name="description" placeholder="Descripción del proyecto"></textarea>
        <br>
        <button>Guardar</button>
    </form>
@endsection

