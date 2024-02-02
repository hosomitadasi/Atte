<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function view(Request $request)
    {
        return view('register');
    }
}
