<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterdUserController extends Controller
{
    public function create()
    {
        return view('register');
    }
}
