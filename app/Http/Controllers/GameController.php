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
        $hasOrdered = auth()->user()->games->contains($game->id);

        return view("games.description", [
            "game" => $game,
            "hasOrdered" => $hasOrdered,
        ]);
    }

    public function order($id) {
        $game = Game::findOrFail($id);
        $user = auth()->user();
        
        $user->games()->syncWithoutDetaching($game->id);
        
        return redirect()->route('dashboard')->with('success', 'Porudzbina uspesno dodata!');
    }

    public function cancelOrder($id) {
        $game = Game::findOrFail($id);
        $user = auth()->user();
        
        $user->games()->detach($game->id);
        
        return redirect()->route('dashboard')->with('success', 'Uspesno otkazana porudzbina!');
    }

    public function storeComment(Request $request, $id) {
        $user = auth()->user();
        $game = Game::findOrFail($id);

        if (!$user->games->contains($game->id)) {
            return redirect()->back()->with('error', 'Morate da narucite igru pre nego sto ostavite recenziju!');
        }

        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $game->comments()->create([
            'user_id' => $user->id,
            'content' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Recenzija uspesno dodata!');
    }
}
