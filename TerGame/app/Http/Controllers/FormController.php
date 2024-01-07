<?php

namespace App\Http\Controllers;

use App\Models\Game;

class FormController extends Controller
{
    public function showUploadForm(){
        return view('upload');
    }

    public function showCommentForm(Game $game) {
        return view('comment', ['game' => $game]);
    }
}
