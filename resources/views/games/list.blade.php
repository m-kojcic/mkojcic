@extends('layouts.app')

@section('title')
Prikaz svih igara
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1>Lista svih igara</h1>
                @if($games->isEmpty())
                    <p>Nema dostupnih igara.</p>
                @else
                    <div class="table-wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naziv</th>
                                    <th>Opis</th>
                                    <th>Cena</th>
                                    <th>Zanr</th>
                                    <th>Slika</th>
                                    <th>Detalji</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($games as $game)
                                    <tr>
                                        <td>{{ $game->id }}</td>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection