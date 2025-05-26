@extends('layouts.admin')

@section('title')
    Users table
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('#usersTable').DataTable({
            responsive: true,
        });
    });
</script>

@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div> 
    @endif
    <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-3">Dodaj korisnika</a>
    <table id="usersTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Korisnik</th>
                <th>Email</th>
                <th>Role</th>
                <th>Opcije</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->role_id == 1)
                            <span class="badge bg-danger">Admin</span>
                        @elseif ($user->role_id == 3)
                            <span class="badge bg-warning">Editor</span>
                        @else
                            <span class="badge bg-success">User</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Izmeni</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
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