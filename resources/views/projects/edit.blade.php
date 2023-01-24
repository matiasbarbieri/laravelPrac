@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        <input type="text" name="title" placeholder="Titulo del proyecto" value="{{ old('title' ,$project->title) }}">
        <br>
        <input type="text" name="url" placeholder="Url del proyecto" value="{{ old('url', $project->url) }}">
        <br>
        <textarea name="description" placeholder="Descripción del proyecto">{{ old('description', $project-> description) }}</textarea>
        <br>
        <button>Guardar</button>
    </form>
@endsection

