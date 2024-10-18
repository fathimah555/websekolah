@extends('layouts.app')

@section('content')
<section id="events" class="py-5 bg-light">
    <div class="container">
    @if(Auth::user()->roles[0]->name =='admin')
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-4 mt-4">Add</a>
    @endif
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @if($events->isEmpty())
                <p class="text-center">Tidak ada event yang tersedia.</p>
            @else
                @foreach($events as $event)
                <div class="col mb-4">
                    <div class="card h-100 shadow-lg rounded"> <!-- Rounded untuk border dan shadow-lg untuk bayangan -->
                    @if($event->gambar)
                        <img src="{{ asset('assets/images/' . $event->gambar) }}" class="card-img-top rounded-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Gambar Event" style="height: 200px; object-fit: cover;">
                    @endif
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">{{ $event->title }}</h5>
                            <p class="card-text text-muted">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
                            @if(Auth::user()->roles[0]->name =='admin')
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-6">
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                     @csrf
                                     <button type="submit" class="btn btn-danger">Delete</button>
 
                                </form>
                                </div>
                            </div>
                        
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
