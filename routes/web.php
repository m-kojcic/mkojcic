<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

Route::get('/', [GameController::class, 'index'])->name('game.home');
Route::get('/list', [GameController::class, 'list'])->name('game.list');
Route::get('/contact', [GameController::class, 'contact'])->name('game.contact');
Route::get('/game/{id}', [GameController::class, 'description'])->name('game.description');

Route::get('/dashboard', function () {
    return view('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
