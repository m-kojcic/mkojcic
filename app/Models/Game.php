<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'genre_id',
        'image',
    ];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
