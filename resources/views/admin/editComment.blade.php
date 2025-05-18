@extends('layouts.admin')
@section('title')
    Izmeni komentar
@endsection

@section('content')
    <h1 class="mb-4">Izmeni komentar</h1>
    <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="content" class="form-label">Komentar</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ $comment->content }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Izmeni igru</button>
    </form>
@endsection