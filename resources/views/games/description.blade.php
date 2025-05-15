@extends('layouts.app')
@section('title')
    {{ $game->title }}
@endsection
@section('content')
    <div class="align-center">
        <header class="major">
            <h1>{{ $game->title }}</h1>
        </header>
        <img src="{{ asset('assets/images/' . $game->image) }}" alt="{{ $game->title }}" class="image main" style="max-width: 820px; margin: 0 auto 1.5em auto;">
        <p class="price" style="font-size: 1.3em; font-weight: bold; color: #2d7a2d;">Cena: {{ $game->price }} RSD</p>
        <p>{{ $game->description }}</p>
    </div>
@endsection