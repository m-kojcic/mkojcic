<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

Route::get('/', [GameController::class, 'index'])->name('game.home');
Route::get('/list', [GameController::class, 'list'])->name('game.list');
Route::get('/contact', [GameController::class, 'contact'])->name('game.contact');
Route::get('/game/{id}', [GameController::class, 'description'])->name('game.description');

Route::get('/profile/dashboard', [ProfileController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/game/{id}/order', [GameController::class, 'order'])->name('games.order');
    Route::delete('game/{id}/cancelOrder', [GameController::class, 'cancelOrder'])->name('games.cancelOrder');
    Route::post('game/{id}/comment', [GameController::class, 'storeComment'])->name('comments.store');
});

require __DIR__.'/auth.php';
