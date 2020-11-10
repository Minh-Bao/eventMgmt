@extends('layouts.master')

@section('content')
    <h1> {{  $events->count() }} {{ Str::plural('Evenement', $events->count()) }} </h1>
    ----------------------------------------------------
    @if ($events->isEmpty())

        <p>aucun evenement pour le moment..</p>

    @else
        <div>
            <ul>
                @foreach ($events as $event)
                    <div class="border w-25">
                        <li><a href="{{ route('events.show',$event->id) }}">{{ $event->title }}</a></li>
                    </div>
                    -----------------------------------------
                @endforeach
            </ul>
        </div>
        <div class="container">
            {{ $events->links('vendor.pagination.bootstrap-4') }}
        </div>

    @endif
@endsection