<!-- partials/purchased.blade.php (Vista Parcial) -->

@foreach ($codes as $code)
    <div class="col mb-5">
        <div class="card">
            <!-- Product image-->
            <div class="img-wrapper">
                <img class="d-block mw-100" src="{{ $code->image }}" alt="Ha ocurrido un error con la imagen" />
            </div>
            <div class="card-body">
                <!-- Product name-->
                <h5 class="card-title text-center">{{ $code->name }}</h5>
                <!-- Product code-->
                <p class="card-text text-center">
                    {{ $code->code }}
                </p>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="{{ route('game', $code->game) }}">
                            View options
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach