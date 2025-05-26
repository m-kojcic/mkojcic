@extends('layouts.admin')
@section('title')
    Dodaj komentar
@endsection

@section('content')
    <h1 class="mb-4">Dodaj komentar</h1>
    <form action="{{ route('admin.comments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="content" class="form-label">Komentar</label>
            <input type="text" class="form-control" id="content" name="content" required>
        </div>
        <div class="mb-3">
            <label for="game_id" class="form-label">Igra</label>
            <select class="form-select" id="game_id" name="game_id">
                @foreach($games as $game)
                    <option value="{{ $game->id }}">{{ $game->title }}</option>
                @endforeach
            </select>
        </div>  
        <button type="submit" class="btn btn-primary">Dodaj komentar</button>
    </form>
@endsection