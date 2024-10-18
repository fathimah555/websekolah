@extends('layouts.app')

@section('content')
<section id="events" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Events SMKN 41 Jakarta</h2>
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm" style="height: 100%;">
                    <img src="{{ asset('images/events/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ $event->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $event->date }} - {{ $event->location }}</small></p>
                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary mt-auto">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
