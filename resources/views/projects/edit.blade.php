@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @include('partials.session-status')


    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        @include('projects._form', ['btnText' => 'Actualizar'])
    </form>
@endsection

