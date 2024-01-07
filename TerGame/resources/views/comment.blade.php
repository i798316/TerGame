@extends('layouts.template')

@section('content')
        <form action="{{ route('addComment', $game) }}" method="post">
            <table>
                <tr>
                    <td><label for="comment">Comment:</label></td>
                    <th><textarea id="comment" name="comment"></textarea></th>
                </tr>
                <tr>
                    <td><label for="rate">Rate (1-5):</label></td>
                    <th><input id="rate" type="number" name="rate" min="1" max="5" required></th>
                </tr>
                <tr>
                    <td></td>
                    <th><button type="submit">Comment</button></td>
                </tr>
              </table>
        </form>
@endsection
