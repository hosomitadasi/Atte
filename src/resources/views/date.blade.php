@extends('layouts.app')

@section('content')
<div class="date-content">
    <a class="arrow" href="{!! '/work/' . ($num - 1) !!}">&it;</a>
    <p class="date">{{ $fixed_date }}</p>
    <a class="arrow" href="{!! '/work/' . ($num + 1) !!}">&it;</a>
</div>

<table>
    <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
    </tr>
    @foreach ($adjustWork as $work)
    <tr>
        <td>{{ $work->users->name }}</td>
        <td>{{ $work->start_time }}</td>
        <td>{{ $work->end_time }}</td>
        <td>{{ $work->rest_sum }}</td>
        <td>{{ $work->work_time }}</td>
    </tr>
    @endforeach
</table>
{{ $adjustWorks->links('pagination::default') }}

@endsection