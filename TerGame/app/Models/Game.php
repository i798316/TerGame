<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['name, developer, category, description, price, discount, image'];

    public function developer()
    {
        return $this->belongTo(User::class, 'id');
    }

    public $timestamps = false;
}
