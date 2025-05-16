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
        @auth
            <form action="{{ route('games.order', $game->id) }}" method="POST">
                @csrf
                <button type="submit" class="button">Poruci</button>
            </form>

            @if($hasOrdered)
                <form action="{{ route('comments.store', $game->id) }}" method="POST">
                    @csrf
                    <textarea name="comment" rows="3" placeholder="Ostavite komentar..."></textarea>
                    <ul class="actions">
                        <li>
                            <button type="submit" class="button">Posalji komentar</button>
                        </li>
                    </ul>
                </form>
            @endif
        @endauth

        @if($game->comments->count())
            <div class="align-left">
                <h3>Komentari</h3>
                @foreach($game->comments as $comment)
                    <div>
                        <strong>{{ $comment->user->name }}</strong>
                        <div>{{ $comment->content }}</div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection