<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function dashboard()
    {
        $gameOrders = Game::select('title')
            ->join('game_user', 'games.id', '=', 'game_user.game_id')
            ->selectRaw('games.title, COUNT(game_user.game_id) as orders_count')
            ->groupBy('games.id', 'games.title')
            ->get();

        return view('admin.dashboard', compact('gameOrders'));
    }

    public function games()
    {
        $games = Game::all();
        return view('admin.games', compact('games'));
    }

    public function createGame()
    {
        $genres = Genre::all();
        return view('admin.editGame', compact('game', 'genres'));
    }

    public function storeGame(Request $request) {
        Game::create($request->only(['title', 'description', 'price', 'genre_id', 'image']));
        return redirect()->route('admin.games')->with('success', 'Igra uspesno dodata');
    }

    public function editGame(Game $game) {
        $genres = Genre::all();
        return view('admin.editGame', compact('game', 'genres'));
    }

    public function updateGame(Request $request, Game $game) {
        $game->update($request->only(['title', 'description', 'price', 'genre_id', 'image']));
        return redirect()->route('admin.games')->with('success', 'Igra uspesno izmenjena');
    }

    public function destroyGame(Game $game) {
        $game->delete();
        return redirect()->route('admin.games')->with('success', 'Igra uspesno obrisana');
    }
}
