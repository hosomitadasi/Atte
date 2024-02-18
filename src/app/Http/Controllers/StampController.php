<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\time;
use App\Models\rest;
use Illuminate\Http\Request;

class StampController extends Controller
{
    public function store(Request $request)
    {
        $times = $request->only(['work-start', 'work-stop', 'month-days']);
        time::create($times);

        $rests =$request->only(['rest-start', 'rest-stop']);
        rest::create($rests);

        return redirect('/stamp');
    }

    public function update(Request $request)
    {
        return redirect('/stamp');
    }
}
