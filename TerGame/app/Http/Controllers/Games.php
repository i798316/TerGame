<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class Games extends Controller
{
    //
    function list(){
        
        $games = Game::all();
        return view('welcome', ['games'=>$games]);
    }
}
