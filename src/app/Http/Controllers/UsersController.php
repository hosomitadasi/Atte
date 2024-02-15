<?php

namespace App\Http\Controllers;
use App\Models\member;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}
