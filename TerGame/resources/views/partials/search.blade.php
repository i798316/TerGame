<!-- partials/search.blade.php (Vista Parcial) -->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">TerGame</h1>
            <form action="/gamesSearch" method="get">
                <label for="search" style="color: white;">Videogame:</label>
                <input type="text" id="search" name="name" placeholder="Insert name...">
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
</header>
