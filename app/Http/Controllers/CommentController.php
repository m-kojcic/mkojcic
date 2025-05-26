<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Game;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comments() {
        $comments = Comment::all();
        return view('admin.comments', compact('comments'));
    }

    public function editComment(Comment $comment) {
        return view('admin.editComment', compact('comment'));
    }

    public function updateComment(Request $request, Comment $comment) {
        $comment->update($request->except('_token', '_method'));
        return redirect()->route('admin.comments')->with('success', 'Komentar uspesno izmenjena');
    }

    public function createComment()
    {
        $games = Game::all();
        return view('admin.createComment', compact('games'));
    }

    public function storeComment(Request $request) {
        $data = $request->only(['content', 'game_id']);
        $data['user_id'] = auth()->id();

        Comment::create($data);
        return redirect()->route('admin.comments')->with('success', 'Komentar uspesno dodat');
    }

    public function destroyComment(Comment $comment) {
        $comment->delete();
        return redirect()->route('admin.comments')->with('success', 'Komentar uspesno obrisana');
    }
}
