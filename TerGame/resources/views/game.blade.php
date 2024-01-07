@extends('layouts.template')

@section('content')
    <h1>{{ $game->name }}</h1>
    <p>Comentarios</p>
        
    @foreach($comments as $comment)
        <div>
            <p>Comment: {{ $comment->comment }}</p>
            <p>Por: {{ $comment->rate }}</p>
        </div>
        <hr>
    @endforeach

    <a href="{{ route('comment', $game) }}">Add a comment</a>


@endsection