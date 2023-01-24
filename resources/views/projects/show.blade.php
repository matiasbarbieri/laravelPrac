@extends('layout')

@section('title', $project->title)


@section('content')

<h1>{{$project->title}}</h1>
<a href="{{route('projects.edit', $project)}}">Editar</a>

<form method="POST" action="{{ @route('projects.destroy', $project) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
<p>{{$project->description}}</p>

@endsection
