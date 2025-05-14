@extends('layouts.app')

@section('title')
GameForge
@endsection

@section('content')
    <div id="main">
		<!-- Featured Post -->
        <article class="post featured">
            <header class="major">
                <span class="date">For {{ $featured->price }}$ !</span>
                <h2><a href="#">{{ $featured->title }}</a></h2>
                <p>{{ $featured->description }}</p>
            </header>
            <a href="#" class="image main"><img src="{{ asset('assets/images/' . $featured->image) }}" alt="{{ $featured->title }}" /></a>
            <ul class="actions special">
                <li><a href="#" class="button large">Buy here!</a></li>
            </ul>
        </article>
        <!-- Posts -->
        <section class="posts">
            @foreach($games->where('id', '!=', $featured->id) as $game)
                <article>
                    <header>
                        <span class="date">For {{ $game->price }}$ !</span>
                        <h2><a href="#">{{ $game->title }}</a></h2>
                    </header>
                    <a href="#" class="image fit">
                        <img src="{{ asset('assets/images/' . $game->image) }}" alt="{{ $game->title }}" />
                    </a>
                    <p>{{ $game->description }}</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Buy here!</a></li>
                    </ul>
                </article>
            @endforeach
        </section>
        <!-- Footer -->
        <footer>
            <div class="pagination"></div>
        </footer>
	</div>
@endsection