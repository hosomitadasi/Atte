<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('stamp');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max191',
            'email' => 'required|email|max191',
            'password' => 'required|min:8|max:16',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return back();
    }

    public function create()
    {
        return view('auth.register');
    }
}
