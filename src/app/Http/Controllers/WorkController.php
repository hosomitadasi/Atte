<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WorkController extends Controller
{
    public function getIndex()
    {
        $work = Work::getWork();

        if (empty($work)) {
            return view('stamp');
        }

        $rest = $work->rests->whereNull("end_time")->first();

        if ($work->end_time) {
            return view('stamp')->with([
                "is_work_start" => true,
                "is_work_end" => true,
            ]);
        }

        if ($work->start_time) {
            if (isset($rest)) {
                return view('stamp')->with([
                    "is_rest" => true,
                    "is_work_start" => true,
                ]);
            } else {
                return view('stamp')->with([
                    "is_rest" => false,
                    "is_work_start" => true,
                ]);
            }
        }
    }

    public function startWork()
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDatestring();
        $time = $dt->toTimestring();

        Work::create([
            'user_id' => $id,
            'date' => $date,
            'start_time' => $time,
        ]);

        return redirect('/')->with('restult', '勤務開始しました');
    }

    public function endWork()
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();

        Work::where('user_id', $id)->where('date', $date)->update(['end_time' => $time]);

        return redirect('/')->with('result', '
        勤務終了しました');
    }

    public function getWork(Request $request)
    {
        $num = (int)$request->num;
        $dt = new Carbon();
        if ($num == 0) {
            $date = $dt;
        } elseif ($num > 0) {
            $date = $dt->addDays($num);
        } else {
            $date = $dt->subDays(-$num);
        }
        $fixed_date = $date->toDateString();

        $works = Wrok::where('date', $fixed_date)->paginate(5);

        $adjustWorks = Work::adjustWork($works);

        return view('date', compact("adjustWorks", "num", "fixed_date"));
    }
}
