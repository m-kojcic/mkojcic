<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $featured = Game::orderBy('created_at', 'desc')->first(); // or use your own logic for "featured"
        $games = Game::where('id', '!=', optional($featured)->id)->get();

        return view("games.home", [
            "featured" => $featured,
            "games" => $games,
        ]);
    }

    public function list() {
        $games = Game::orderBy('created_at', 'desc')->get();

        return view("games.list", [
            "games" => $games,
        ]);
    }

    public function contact() {
        return view("games.contact");
    }

    public function description($id) {
        $game = Game::findOrFail($id);

        return view("games.description", [
            "game" => $game,
        ]);
    }
}
