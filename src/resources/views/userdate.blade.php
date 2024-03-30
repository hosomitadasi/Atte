@extends('layouts.app')

@section('content')

<p class="welcome">{{ $displayUsesr }}さんお疲れ様です！</p>

<table class="date-table">
    <tr>
        <th class="date-item">日付</th>
        <th class="date-item">勤務開始</th>
        <th class="date-item">勤務終了</th>
        <th class="date-item">休憩時間</th>
        <th class="date-item">勤務時間</th>
    </tr>
    @foreach ($adjustWorks as $work)
    <tr>
        <td class="date-item">{{ $work->date??'' }}</td>
        <td class="date-item">{{ $work->start_time??'' }}</td>
        <td class="date-item">{{ $work->end_time??'' }}</td>
        <td class="date-item">{{ $work->rest_sum??'' }}</td>
        <td class="date-item">{{ $work->work_time??'' }}</td>
    </tr>
    @endforeach
</table>
{{ $adjustWorks->links('pagination::default') }}
@endsection