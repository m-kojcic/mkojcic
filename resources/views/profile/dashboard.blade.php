@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')

<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Porucene igre') }}
</h2>

@if (session('success'))
    <div role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="py-12">
    @if ($games->isEmpty())
        <p class="text-center">Nemate porucenih igara.</p>
    @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th>Igra</th>
                                <th>Opis</th>
                                <th>Cena</th>
                                <th>Zanr</th>
                                <th>Slika</th>
                                <th>Detalji</th>
                                <th>Otkazi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($games as $game)
                                <tr>
                                    <td>{{ $game->title }}</td>
                                    <td>{{ $game->description }}</td>
                                    <td>{{ $game->price }}</td>
                                    <td>{{ $game->genre->name ?? 'N/A' }}</td>
                                    <td>
                                        <img src="{{ asset('assets/images/' . $game->image) }}" alt="{{ $game->name }}" width="80" height="80" style="object-fit:cover; display:block; margin:auto;">
                                    </td>
                                    <td>
                                        <a href="{{ route('game.description', ['id' => $game->id]) }}" class="button small fit">Opsirnije</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('games.cancelOrder', $game->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button small fit" onclick="return confirm('Da li ste sigurni da zelite da otkazete porudzbinu?')">Otkazi</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    
</div>
@endsection