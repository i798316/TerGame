@extends('layouts.template')

@section('content')
    @foreach ($games as $game)
        <p>{{ $game->name }}</p>
        <p>{{ $game->category }}</p>
        <p>{{ $game->description }}</p>
        <!-- Muestra otros detalles del producto según tus necesidades -->
    @endforeach
@endsection
