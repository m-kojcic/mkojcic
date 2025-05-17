<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

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
}
