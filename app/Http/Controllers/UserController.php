<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function createUser()
    {
        return view('admin.createUser');
    }

    public function storeUser(Request $request) {
        $data = $request->except(['_token', '_method']);
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('admin.users')->with('success', 'Korisnik uspesno dodat');
    }

    public function editUser(User $user) {
        return view('admin.editUser', compact('user'));
    }

    public function updateUser(Request $request, User $user) {
        $data = $request->except(['_token', '_method']);
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']); // Don't update password if left blank
        }
        $user->update($data);
        return redirect()->route('admin.users')->with('success', 'Korisnik uspesno izmenjen');
    }

    public function destroyUser(User $user) {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'Korisnik uspesno obrisan');
    }
}
