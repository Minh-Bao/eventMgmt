@extends('layouts.master')

@section('content')
    <h1>Creer un evenement</h1>

    <form action="{{ route('events.store', $event ?? '') }}" method="POST">
        {{ csrf_field() }}
       
        @include('events._form', ['submitButtonText' => "Créer un événement"])
        
        <a href="{{ route('home') }}">Annuler</a>
    </form>
@endsection