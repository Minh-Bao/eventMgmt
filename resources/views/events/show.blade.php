@extends('layouts.master')

@section('content')
    <h1>{{ $event->title }}</h1>

    <p>{{ $event->description }}</p>

    <a class="btn btn-outline-secondary " href="{{ route('events.edit', $event) }}">Modifier</a>
    
    <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline-block">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input class="btn btn-danger" type="submit" value='Supprimer'>
    </form><br>
    <a class="" href="{{ route('home') }}">Tous les evenements</a>


@endsection