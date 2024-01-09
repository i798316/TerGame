<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';
    protected $fillable = ['code'];

    public function game()
    {
        return $this->belongTo(Game::class, 'id');
    }

    public function user()
    {
        return $this->belongTo(User::class, 'id');
    }
}
