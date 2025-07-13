<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'users' => User::all(),
            'products' => Product::all(),
        ]);
    }
}
