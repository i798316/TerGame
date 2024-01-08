<!-- partials/games.blade.php (Vista Parcial) -->

@foreach ($games as $game)
    <div class="carousel-item">
        <div class="card">
            <!-- Product image-->
            <div class="img-wrapper">
                <img class="d-block w-100" src="{{ $game->image }}" alt="Ha ocurrido un error con la imagen" />
            </div>
            <div class="card-body">
                <!-- Product name-->
                <h5 class="card-title text-center">{{ $game->name }}</h5>
                <!-- Product price-->
                <p class="card-text text-center">
                    @if ($game->discount > 1)
                        <span class="text-muted text-decoration-line-through">${{ sprintf('%.2f', $game->price) }}</span>
                        ${{ sprintf('%.2f', $game->price * (1 - $game->discount / 100)) }}
                    @else
                        ${{ sprintf('%.2f', $game->price) }}
                    @endif
                </p>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="{{ route('game', $game) }}">View Comments</a>

                        @if ($game->developer == $actualUser)
                            <a class="btn btn-outline-danger mt-auto" href="{{ url('/deleteGame', $game) }}">
                                Delete
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
