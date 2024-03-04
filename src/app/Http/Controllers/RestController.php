<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Rest;
use Carbon\Carbon;

class RestController extends Controller
{
    public function startRest()
    {
        $dt = new Carbon();
        $time = $dt->toTimeString();

        $work = Work::getWork();

        $work_id = $work->id;

        Rest::create([
            'work_id' => $work_id,
            'start_time' => $time,
        ]);

        return redirect('/')->with('result', '休憩開始しました');
    }

    public function endRest()
    {
        $dt = new Carbon();
        $time = $dt->toTimeString();

        $work = Work::getWork();

        $rest = $work->rests->whereNull("end_time")->first();

        Rest::where('id', $rest->id)->update(['end_time' => $time]);

        return redirect('/')->with('result', '休憩終了しました');
    }
}
