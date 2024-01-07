<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use App\Models\Comment;
use Carbon\Carbon;

class GameController extends Controller
{
    public function uploadGame(Request $request){
        $userId = Auth::id();

        $game = new Game([]);
        $game->name = $request->input('name');
        $game->category = $request->input('category');
        $game->developer = $userId;
        $game->description = $request->input('description');
        $game->price = $request->input('price');
        $game->discount = $request->input('discount');
        $game->created_at = Carbon::now();
        $game->save();

        return redirect('/dashboard')->with('success', 'Upload correct');
    }

    public function gameSearch(Request $request){
        $query = $request->input('name');
        $games = Game::where('name', 'LIKE', "%$query%")->get();

        return view('games', ['games' => $games]);
    }

    public function listOnOffer(){
        $games = Game::where('discount', '>', '0')->get();
        return view('welcome', ['games'=>$games]);
    }

    public function listLast(){
        $games = Game::orderBy('created_at', 'desc')->get();
        return view('games', ['games'=>$games]);
    }
    
    public function listAll(){
        $games = Game::all();
        return view('games', ['games'=>$games]);
    }

    public function showGame($id){
        $game = Game::findOrFail($id);
        $comments = Comment::where('game', 'LIKE', "%$id");
        return view('game', ['game' => $game, 
                             'comments' => $comments]);
    }
}
