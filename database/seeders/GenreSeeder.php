<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
        ]);
        Genre::create([
            'name' => 'RPG',
        ]);
        Genre::create([
            'name' => 'Shooter',
        ]);
        Genre::create([
            'name' => 'Open World',
        ]);
        Genre::create([
            'name' => 'Platformer',
        ]);
        Genre::create([
            'name' => 'Horror',
        ]);
    }
}
