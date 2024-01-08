<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use App\Models\Comment;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function addComment(Request $request, Game $game){
        $user = Auth::id();

        $comment = new Comment([]);
        $comment->text = $request->input('comment');
        $comment->rate = $request->input('rate');
        $comment->game = $game->id;
        $comment->user = $user;
        $comment->created_at = Carbon::now();
        $comment->save();

        return redirect()->back()->with('success', 'Correct comment');
    }
}
