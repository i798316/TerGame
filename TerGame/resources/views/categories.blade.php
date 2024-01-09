@extends('layouts.template')

@section('content')
    <h1>Categories</h1>

@foreach ($games as $game)
    <div class="col mb-5">
        <div class="card">
            <div class="card-body">
                <!-- Product name-->
                <h5 class="card-title text-center">{{ $game->category }}</h5>
                <!-- Product price-->
                <p class="card-text text-center">
                    Juegos: {{ $game->gamesInCategory }}
                </p>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="{{ route('gamesInCategory', $game->category) }}">
                            Go
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection