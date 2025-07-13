<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::latest()->get(),
        ]);
    }

    public function show(User $user)
    {
        return view('admin.user.show', [
            'user' => $user,
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/user')->with('success', 'Berhasil menghapus pengguna.');
    }
}
