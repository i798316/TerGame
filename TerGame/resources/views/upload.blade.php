@extends('layouts.template')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div>
            <h2>Nuevo Juego</h2>
        </div>
        <div class="justify-content-center">
            <form action="{{ url('/uploadGame') }}" method="post">
                <table>
                    <tr>
                        <td><label for="name">Videogame's name:</label></th>
                        <th><input required type="text" id="name" name="name" /></th>
                    </tr>
                    <tr>
                        <td><label for="category">Category:</label></td>
                        <th><input required type="text" id="category" name="category" /></th>
                    </tr>
                    <tr>
                        <td><label for="description">Description:</label></td>
                        <th><textarea required id="description" name="description"></textarea></th>
                    </tr>
                    <tr>
                        <td><label for="price">Price:</label></td>
                        <th><input required id="price" type="double" name="price"></th>
                    </tr>
                    <tr>
                        <td><label for="discount">Discount:</label></td>
                        <th><input required id="discount" type="number" name="discount"></th>
                    </tr>
                    <tr>
                        <td><label for="discount">Image(Link to Image):</label></td>
                        <th><input required id="discount" type="string" name="image"></th>
                    </tr>
                    <tr>
                        <td></td>
                        <th><button type="submit">Upload</button></td>
                        
                    </tr>
                  </table>
            </form>
        </div>
    </div>
</section>
        
@endsection
