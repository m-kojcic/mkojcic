@extends('layouts.admin')

@section('title')
    Games table
@endsection

@section('content')
    <a href="{{ route('admin.games.create') }}" class="btn btn-success mb-3">Dodaj igru</a>
    <table id="games-table" class="table table-bordered table-striped">
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
                        <a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-primary">Izmeni</a>
                            <form action="{{ route('admin.games.destroy', $game->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Obrisi</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#games-table').DataTable();
        });
    </script>
@endsection