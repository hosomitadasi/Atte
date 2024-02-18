<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\time;
use App\Models\rest;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        $members = member::all('name');
        $times = time::all();
        $rests = rest::all();
        return view('data', compact('members', 'times', 'rests'));
    }
}
