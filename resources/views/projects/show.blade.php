@extends('layout')

@section('title', $project->title)


@section('content')

<h1>{{$project->title}}</h1>
<p>{{$project->description}}</p>

@endsection
