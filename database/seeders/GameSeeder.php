<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'title' => 'Final Fantasy VII',
            'description' => 'A classic RPG game set in a fantasy world.',
            'image' => 'ff7.jpg',
            'price' => 2999.99,
            'genre_id' => 2,
        ]);
        Game::create([
            'title' => 'Doom Eternal',
            'description' => 'A fast-paced first-person shooter game.',
            'image' => 'doometernal.jpg',
            'price' => 5999.99,
            'genre_id' => 3,
        ]);
        Game::create([
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'description' => 'An open-world action-adventure game.',
            'image' => 'zelda.jpg',
            'price' => 2999.99,
            'genre_id' => 4,
        ]);
        Game::create([
            'title' => 'Super Mario Odyssey',
            'description' => 'A platformer game featuring Mario in a 3D world.',
            'image' => 'mario.jpg',
            'price' => 3999.99,
            'genre_id' => 5,
        ]);
        Game::create([
            'title' => 'Devil May Cry 5',
            'description' => 'An action-adventure hack and slash game.',
            'image' => 'dmc5.jpg',
            'price' => 4999.99,
            'genre_id' => 1,
        ]);
    }
}
