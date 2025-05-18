@extends('layouts.admin')
@section('title')
    Izmeni igru
@endsection

@section('content')
    <h1 class="mb-4">Izmeni igru</h1>
    <form action="{{ route('admin.games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Naziv</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $game->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Cena</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $game->price }}" required>
        </div>
        <div class="mb-3">
            <label for="genre_id" class="form-label">Zanr</label>
            <select class="form-select" id="genre_id" name="genre_id">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $game->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Slika</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Izmeni igru</button>
    </form>
@endsection