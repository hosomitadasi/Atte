@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $user->name }}の{{ $month }}月の勤怠情報</h1>

    @foreach ($works as $work)
    <div class="work-entry">
        <h2>日付: {{ $work->date }}</h2>
        <p>勤務開始時間: {{ $work->start_time }}</p>
        <p>勤務終了時間: {{ $work->end_time }}</p>
        <p>休憩時間:
            @php
            $totalRestTime = 0;
            foreach ($work->rests as $rest) {
            $restStart = strtotime($rest->start_time);
            $restEnd = strtotime($rest->end_time);
            $totalRestTime += ($restEnd - $restStart);
            }
            echo gmdate("H:i:s", $totalRestTime);
            @endphp
        </p>
        <p>勤務時間:
            @php
            $workStart = strtotime($work->start_time);
            $workEnd = strtotime($work->end_time);
            $workDuration = $workEnd - $workStart - $totalRestTime;
            echo gmdate("H:i:s", $workDuration);
            @endphp
        </p>
    </div>
    @endforeach
</div>
@endsection