<?php

namespace App\Http\Controllers;
use App\Models\member;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $members = $request->only(['name', 'email', 'password']);
        Member::create($members);
        return view('register', compact('members'));
    }
}
