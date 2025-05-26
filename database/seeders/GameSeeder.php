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
            'featured' => true,
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
            'featured' => true,
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
            'featured' => true,
        ]);
        Game::create([
            'title' => 'Silent Hill 2',
            'description' => 'A psychological horror game with a gripping story.',
            'image' => 'sh2.jpg',
            'price' => 5999.99,
            'genre_id' => 6,
        ]);
        Game::create([
            'title' => 'Resident Evil 4',
            'description' => 'A survival horror game with intense action.',
            'image' => 're4.jpg',
            'price' => 3999.99,
            'genre_id' => 6,
        ]);
        Game::create([
            'title' => 'Elden Ring',
            'description' => 'An open-world action RPG with deep lore.',
            'image' => 'er.jpg',
            'price' => 4999.99,
            'genre_id' => 2,
            'featured' => true,
        ]);
        Game::create([
            'title' => 'Nier Automata',
            'description' => 'An action RPG with a compelling story and unique gameplay.',
            'image' => 'nier.jpg',
            'price' => 3999.99,
            'genre_id' => 1,
        ]);
        Game::create([
            'title' => 'The Witcher 3: Wild Hunt',
            'description' => 'An open-world RPG with a rich narrative and expansive world.',
            'image' => 'witcher3.jpg',
            'price' => 5999.99,
            'genre_id' => 2,
            'featured' => true,
        ]);
    }
}
