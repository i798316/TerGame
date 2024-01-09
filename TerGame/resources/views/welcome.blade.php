<!-- welcome.blade.pp (Vista que extiende) -->
@extends('layouts.template')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/carousel.css')
    @vite('resources/js/scripts.js')
    @include('partials.search')
    <!-- Contenido de la Página de Inicio -->
    <!-- Section-->
    <section class="py-5">
        @include('partials.popUp')
        <div class="container px-4 px-lg-5 mt-5">
            <div>
                <h1>Games on sales</h1>
            </div>
            <div class="justify-content-center">
                <div id="carouselExampleControls" class="carousel slide">
                    <div class="carousel-inner">
                        @include('partials.gamesCarousel')
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </section>
@endsection
