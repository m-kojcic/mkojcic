@extends('layouts.admin')

@section('title')
    Games table
@endsection

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Cena</th>
                <th>Zanr</th>
                <th>Slika</th>
                <th>Opcije</th>
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
                        <img src="{{ asset('assets/images/' . $game->image) }}" alt="{{ $game->name }}">
                    </td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection