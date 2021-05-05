@extends('layouts/layout')

@section('title', 'Détails d\'une tâche ')
@section('main')
<h1> <b>{{$task->title}} </b> </h1>
<hr>


<p>Description de la tâche : </p>
<p>{{$task->description}}</p>
<hr>
<p> Cette tâche a été crée le {{ \Carbon\Carbon::parse($task->created_at)->translatedFormat('d F Y')}}</p>

<button><a href="{{$task->id}}/delete">Supprimer la tâche</a></button>
@endsection