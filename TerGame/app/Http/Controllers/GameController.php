<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $game->price = sprintf("%.2f",$request->input('price'));
        $game->discount = $request->input('discount');
        $game->image = $request->input('image');
        $game->created_at = Carbon::now();
        $game->save();

        return redirect('/')->with('success', 'Upload correct');
    }

    
    public function deleteGame($id){
        $game = Game::where('id', 'LIKE', "%$id")->delete();
        return redirect()->back()->with('success', 'Deleted correct');
    }

    public function gameSearch(Request $request)
    {
        $userId = Auth::id();
        $query = $request->input('name');
        $games = Game::where('name', 'LIKE', "%$query%")->get();

        return view('searchGames', [
            'games' => $games,
            'actualUser' => $userId
        ]);
    }

    public function listOnOffer()
    {
        $userId = Auth::id();
        $games = Game::where('discount', '>', '0')->get();
        return view('welcome', [
            'games' => $games,
            'actualUser' => $userId
        ]);
    }

    public function listLast()
    {
        $userId = Auth::id();
        $games = Game::orderBy('created_at', 'desc')->get();
        return view('lastGames', [
            'games' => $games,
            'actualUser' => $userId
        ]);
    }

    public function listAll()
    {
        $userId = Auth::id();
        $games = Game::all();
        return view('allGames', [
            'games' => $games,
            'actualUser' => $userId
        ]);
    }

    public function showGame($id)
    {
        $userId = Auth::id();

        $game = Game::findOrFail($id);
        $comments = Comment::where('game', 'LIKE', "%$id")
            ->Join('users', 'users.id', '=', 'comments.user')
            ->select('comments.*', 'users.name')
            ->orderBy('created_at', 'desc')
            ->get();


        return view('game', [
            'game' => $game,
            'comments' => $comments,
            'actualUser' => $userId
        ]);
    }

    public function showOwnGames()
    {
        $userId = Auth::id();
        $games = Game::where('developer', 'LIKE', "%$userId")->get();
        return view('ownGames', [
            'games' => $games,
            'actualUser' => $userId
        ]);
    }

    public function categories()
    {
        $games = DB::table('games')
            ->select('category', DB::raw('count(*) as gamesInCategory'))
            ->groupBy('category')
            ->get();

        return view('categories', [
            'games' => $games
        ]);
    }

    public function gamesInCategory($category)
    {
        $userId = Auth::id();

        $games = Game::where('category', 'LIKE', "%$category%")->get();

        return view('gamesInCategory', [
            'games' => $games,
            'category' => $category,
            'actualUser' => $userId
        ]);
    }
}
