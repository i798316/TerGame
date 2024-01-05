<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
<<<<<<< HEAD

   protected function create(Request $request) {
        return Game::create([
            'name' => $request->name,
        ]);
    }
=======
>>>>>>> 74b0e82cc1ccd4e9b8e03196b721ff4ce7472b19
}
