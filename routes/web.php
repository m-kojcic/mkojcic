<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::middleware('IsAdmin')->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/games', [AdminController::class, 'games'])->name('admin.games');
    Route::get('/admin/games/create', [AdminController::class, 'createGame'])->name('admin.games.create');
    Route::post('/admin/games', [AdminController::class, 'storeGame'])->name('admin.games.store');
    Route::get('/admin/games/{game}/edit', [AdminController::class, 'editGame'])->name('admin.games.edit');
    Route::put('/admin/games/{game}', [AdminController::class, 'updateGame'])->name('admin.games.update');
    Route::delete('/admin/games/{game}', [AdminController::class, 'destroyGame'])->name('admin.games.destroy');
    Route::get('/admin/comments', [CommentController::class, 'comments'])->name('admin.comments');
    Route::get('/admin/comments/{comment}/edit', [CommentController::class, 'editComment'])->name('admin.comments.edit');
    Route::put('/admin/comments/{comment}', [CommentController::class, 'updateComment'])->name('admin.comments.update');
    Route::delete('/admin/comments/{comment}', [CommentController::class, 'destroyComment'])->name('admin.comments.destroy');
    Route::get('/admin/comments/create', [CommentController::class, 'createComment'])->name('admin.comments.create');
    Route::post('/admin/comments', [CommentController::class, 'storeComment'])->name('admin.comments.store');
});

Route::middleware('IsOnlyAdmin')->group(function() {
    Route::get('/admin/users', [UserController::class, 'users'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'createUser'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroyUser'])->name('admin.users.destroy');
});

require __DIR__.'/auth.php';
