<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;

class GameController extends Controller
{
    public function uploadGame(Request $request)
    {
        $userId = Auth::id();

        $game = new Game([]);
        $game->name = $request->input('name');
        $game->category = $request->input('category');
        $game->developer = $userId;
        $game->description = $request->input('description');
        $game->save();

        return redirect('/dashboard')->with('success', 'Upload correct');
    }

    public function games(Request $request)
    {
        $query = $request->input('name');

        $games = Game::where('name', 'LIKE', "%$query%")->get();

        return view('games', ['games' => $games]);
    }
}
