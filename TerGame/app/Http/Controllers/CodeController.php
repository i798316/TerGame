<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use App\Models\Code;
use Carbon\Carbon;

class CodeController extends Controller
{
    public function showPurchased()
    {
        $userId = Auth::id();
        $codes = Code::where('user', 'LIKE', "%$userId")
            ->Join('games', 'games.id', '=', 'codes.game')
            ->select('codes.*', 'games.name')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('purchasedGames', [
            'codes' => $codes,
            'actualUser' => $userId
        ]);
    }

    public function generateCode() {
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }

    public function buy(Game $game) {
        $user = Auth::id();

        $code = new Code([]);
        $code->code = $this->generateCode();
        $code->game = $game->id;
        $code->user = $user;
        $code->created_at = Carbon::now();
        $code->save();

        return redirect()->back()->with('success', 'Correct comment');
    }
}
