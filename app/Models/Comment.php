<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'game_id',
        'content',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
