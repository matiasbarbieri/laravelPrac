@extends('layout')

@section('title', $project->title)


@section('content')

<h1>{{$project->title}}</h1>
<a href="{{route('projects.edit', $project)}}">Editar</a>
<p>{{$project->description}}</p>

@endsection
