@extends('layouts.template')

@section('content')
        <form action="/my-handling-form-page" method="post">
            <ul>
                <li>
                    <label for="name">Videogame's name:</label>
                    <input type="text" id="name" name="name" />
                </li>
                <li>
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" />
                </li>
                <li>
                    <label for="description">Description:</label>
                    <textarea id="description" name="description"></textarea>
                </li>
                <li class="button">
                    <button type="submit">Upload</button>
                </li>

            </ul>
        </form>
@endsection
