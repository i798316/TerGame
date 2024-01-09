@extends('layouts.template')

@section('content')
@include('partials.search')
    @vite('resources/css/carousel.css')    
    <!-- Contenido de la Página de Inicio -->
    <!-- Section-->
        <section class="py-5">
            @include('partials.popUp')
            <div class="container px-4 px-lg-5 mt-5">
                <div>
                    <h2>Those are the games that you have purchased</h2>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @include('partials.purchased')
                </div>
            </div>
        </section>
@endsection