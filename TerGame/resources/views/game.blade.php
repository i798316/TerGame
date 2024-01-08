@extends('layouts.template')
@section('content')
@include('partials.search')
    @vite('resources/css/gameStyle.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <div class="row ">

                <div class="col-md-6 image-container">
                    <img src="{{ $game->image }}" alt="">
                </div>

                <div class="col-md-6">
                    <h1>{{ $game->name }}</h1>
                    <p>{{ $game->description }}</p>
                    @if ($game->discount > 1)
                        <span class="text-muted text-decoration-line-through">${{ sprintf('%.2f', $game->price) }}</span>
                        ${{ sprintf('%.2f', $game->price * (1 - $game->discount / 100)) }}
                    @else
                        ${{ sprintf('%.2f', $game->price) }}
                    @endif
                    <br>
                    <!--<button>BUY</button>-->
                </div>

            </div>


            <hr>
            @include('partials.comment')
            <hr>
            
            @include('partials.popUp')
            <p>Comentarios</p>
            <hr>
            @foreach ($comments as $comment)
                <div>
                    <p>Por: {{ $comment->name }}</p>
                    <p>Comment: {{ $comment->text }}</p>
                    <div>
                        <h5 class="review-stat">Rate:</h5>
                        <div class="small-ratings">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $comment->rate)
                                    <i class="fa fa-star rating-color"></i>
                                @else
                                    <i class="fa fa-star"></i>
                                @endif
                            @endfor
                        </div>

                    </div>

                </div>
                <hr>
            @endforeach


        </div>
        <style>
            body{
                background-color: lightgray;
            }

        </style>
    </section>
@endsection
