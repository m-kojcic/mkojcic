<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'game_id' => 1,
            'user_id' => 1,
            'content' => 'Odlicna igra, preporučujem je svima!',
        ]);
        Comment::create([
            'game_id' => 2,
            'user_id' => 2,
            'content' => 'Igra je fenomenalna, ali malo preteška.',
        ]);
        Comment::create([
            'game_id' => 3,
            'user_id' => 3,
            'content' => 'Odlican svet i priča, ali gameplay nije najbolji.',
        ]);
        Comment::create([
            'game_id' => 4,
            'user_id' => 2,
            'content' => 'Zabavan platformer, ali nedostaje dubina.',
        ]);
        Comment::create([
            'game_id' => 5,
            'user_id' => 1,
            'content' => 'Veoma zabavna akcija.',
        ]);
    }
}
