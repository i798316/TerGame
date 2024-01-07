<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['text, rate'];

    public function game()
    {
        return $this->belongTo(Game::class, 'id');
    }

    public function user()
    {
        return $this->belongTo(User::class, 'id');
    }
}
