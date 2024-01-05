@extends('layouts.template')

@section('content')
        <form action="/uploadGame" method="post">
            <table>
                <tr>
                    <td><label for="name">Videogame's name:</label></th>
                    <th><input type="text" id="name" name="name" /></th>
                </tr>
                <tr>
                    <td><label for="category">Category:</label></td>
                    <th><input type="text" id="category" name="category" /></th>
                </tr>
                <tr>
                    <td><label for="description">Description:</label></td>
                    <th><textarea id="description" name="description"></textarea></th>
                </tr>
                <tr>
                    <td><label for="price">Price:</label></td>
                    <th><input id="price" type="number" name="price"></th>
                </tr>
                <tr>
                    <td><label for="discount">Discount:</label></td>
                    <th><input id="discount" type="number" name="discount"></th>
                </tr>
                <tr>
                    <td></td>
                    <th><button type="submit">Upload</button></td>
                    
                </tr>
              </table>
        </form>
@endsection
