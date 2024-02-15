<?php

namespace App\Http\Controllers;

use App\Models\time;
use App\Models\rest;
use Illuminate\Http\Request;

class StampController extends Controller
{
    public function store(Request $request)
    {
        $time = $request ;
        return view('stamp');
    }
}
