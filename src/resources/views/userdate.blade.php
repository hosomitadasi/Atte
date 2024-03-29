@extends('layouts.app')

@section('content')
<div class="user-content">
    <a class="" href="{!! '/date/' . ($num - 1) !!}">&it;</a>
    <p></p>
    <a class="" href="{!! '/date/' . ($num - 1) !!}">&it;</a>
</div>

@if( Auth::check() )
<p class="welcome">{{ Auth::user()->name}}さんお疲れ様です！</p>
@endif

<table class="date-table">
    <tr>
        <th class="date-item">日付</th>
        <th class="date-item">勤務開始</th>
        <th class="date-item">勤務終了</th>
        <th class="date-item">休憩時間</th>
        <th class="date-item">勤務時間</th>
    </tr>
    @foreach ($adjustWork as $work)
    <tr>
        <td class="date-item">{{ $work->date??'' }}</td>
        <td class="date-item">{{ $work->start_time??'' }}</td>
        <td class="date-item">{{ $work->end_time??'' }}</td>
        <td class="date-item">{{ $work->rest_sum??'' }}</td>
        <td class="date-item">{{ $work->work_time??'' }}</td>
    </tr>
    @endforeach
</table>

@endsection