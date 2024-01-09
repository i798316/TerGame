<!-- aboutUs.blade.pp (Vista que extiende) -->
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
                <h1>About Us</h1>
            </div>
            <div class="justify-content-center">
                <p>
                    ¡Bienvenido a nuestra tienda de videojuegos!
                </p>
                <p>
                    En Ter Game, nos apasiona llevar la emoción del mundo de los videojuegos directamente a tus
                    manos. Nos enorgullece ser tu destino de confianza para explorar, descubrir y adquirir los títulos más
                    emocionantes y las últimas novedades en la industria del gaming.
                </p>
                <p>
                    En Ter Game, no solo vendemos videojuegos; compartimos la pasión por la narrativa, la
                    competición y la diversión que solo el mundo del gaming puede ofrecer. Únete a nuestra comunidad y
                    descubre
                    un lugar donde los jugadores pueden conectarse, compartir experiencias y encontrar el próximo juego que
                    los
                    llevará a nuevas aventuras.
                </p>
                <p>
                    Gracias por elegirnos como tu destino de videojuegos. ¡Estamos emocionados de ser parte de tu
                    experiencia de
                    juego!
                </p>
                <p>
                    El equipo de Ter Game
                </p>
            </div>
        </div>
    </section>
@endsection
