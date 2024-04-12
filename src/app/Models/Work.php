<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date', 'start_time', 'end_time'];

    public function rests()
    {
        return $this->hasMany('App\Models\Rest');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User', "user_id");
    }


    public static function getWork()
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();

        $work = Work::where('user_id', $id)->where('date', $date)->first();

        return $work;
    }

    public static function adjustWork($works)
    {
        foreach ($works as $index => $work) {
            $rests = $work->rests;
            $sum = 0;
            foreach ($rests as $rest) {
                $start_time = $rest->start_time;
                $start_dt = new Carbon($start_time);
                $end_time = $rest->end_time;
                $end_dt = new Carbon($end_time);
                $diff_seconds = $start_dt->diffInSeconds($end_dt);
                $sum = $sum + $diff_seconds;
            }
            $start_at = new Carbon($work->start_time);
            $end_at = new Carbon($work->end_time);

            $diff_start_end = $start_at->diffInSeconds($end_at);
            $diff_work = $diff_start_end - $sum;


            $res_hours = floor($sum / 3600);
            $res_minutes = floor(($sum / 60) % 60);
            $res_seconds = $sum % 60;

            $work_hours = floor($diff_work / 3600);
            $work_minutes = floor(($diff_work / 60) % 60);
            $work_seconds = $diff_work % 60;

            $time_dt = Carbon::createFromTime($res_hours, $res_minutes, $res_seconds);

            $time_work = Carbon::createFromTime($work_hours, $work_minutes, $work_seconds);

            $works[$index]->rest_sum = $time_dt->toTimeString();
            $works[$index]->work_time = $time_work->toTimeString();
        }
        return $works;
    }

    public static function adjustUsers($users)
    {
        
        return $users;
    }

}
