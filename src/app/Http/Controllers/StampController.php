<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StampController extends Controller
{
    public function store(Request $request)
    {
        return view('stamp');
    }
}
