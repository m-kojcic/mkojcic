@extends('layouts.admin')

@section('title')
    Comments table
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('#commentsTable').DataTable();
    });
</script>

@endsection

@section('content')
    <table id="commentsTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Komentar</th>
                <th>User</th>
                <th>Igra</th>
                <th>Napravljen</th>
                <th>Izmenjen</th>
                <th>Opcije</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->user->name }}</td>
                    <td>{{ $comment->game->title }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td>{{ $comment->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.comments.edit', $comment->id) }}" class="btn btn-primary">Izmeni</a>
                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Obrisi</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection