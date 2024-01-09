@extends('layouts.template')

@section('content')
    @include('partials.search')

    <section class="py-5">
        @include('partials.popUp')
        <div class="container px-4 px-lg-5 mt-5">
            <div>
                <h1>Categories</h1>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($games as $game)
                    <div class="col mb-5">
                        <div class="card">
                            <div class="card-body">
                                <!-- Name-->
                                <h5 class="card-title text-center">{{ $game->category }}</h5>
                                <!-- Num of Games-->
                                <p class="card-text text-center">
                                    Juegos: {{ $game->gamesInCategory }}
                                </p>
                                <!-- Actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto"
                                            href="{{ route('gamesInCategory', $game->category) }}">
                                            Go
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
