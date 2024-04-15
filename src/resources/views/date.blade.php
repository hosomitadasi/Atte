@extends('layouts.app')

@section('content')
<div class="date-content">
    <a class="arrow" href="{!! '/date/' . ($num - 1) !!}">&it;</a>
    <p class="date">{{ $fixed_date }}</p>
    <a class="arrow" href="{!! '/date/' . ($num + 1) !!}">&it;</a>
</div>

<table class="date-table">
@csrf
    <tr>
        <th class="date-item">名前</th>
        <th class="date-item">勤務開始</th>
        <th class="date-item">勤務終了</th>
        <th class="date-item">休憩時間</th>
        <th class="date-item">勤務時間</th>
    </tr>
    @foreach ($adjustWorks as $work)
    <tr>
        <td class="date-item">{{ $work->users->name??'' }}</td>
        <td class="date-item">{{ $work->start_time??'' }}</td>
        <td class="date-item">{{ $work->end_time??'' }}</td>
        <td class="date-item">{{ $work->rest_sum??'' }}</td>
        <td class="date-item">{{ $work->work_time??'' }}</td>
    </tr>
    @endforeach
</table>
{{ $adjustWorks->links('pagination::default') }}

@endsection