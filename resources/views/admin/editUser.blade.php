@extends('layouts.admin')
@section('title')
    Izmeni korisnika
@endsection

@section('content')
    <h1 class="mb-4">Izmeni korisnika</h1>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Korisnik</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="role_id" class="form-label">Role</label>
            <input type="number" class="form-control" id="role_id" name="role_id" value="{{ $user->role_id }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Izmeni korisnika</button>
    </form>
@endsection