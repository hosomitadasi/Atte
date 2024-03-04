@extends('layouts.app')

@section('content')
<p class="welcome">{{ Auth::user()->name}}さんお疲れ様です！</p>
<div class="stamp-content">
    @if(!isset($is_work_start))
    <a href="/work/start" class="time-button">勤務開始</a>
    @else
    <p class="time-button inactive">勤務開始</p>
    @endif

    @if(!isset($is_work_stop))
    <a href="/work/stop" class="time-button">勤務終了</a>
    @else
    <p class="time-button inactive">勤務終了</p>
    @endif

    @if(isset($is_rest))
    @if(!$is_rest)
    <a href="/rest/start" class="time-button">休憩開始</a>
    @else
    <p class="time-button inactive">休憩開始</p>
    @endif
    @endif

    @if(isset($is_rest))
    @if($is_rest)
    <a href="/rest/stop" class="time-button">休憩終了</a>
    @else
    <p class="time-button inactive">休憩終了</p>
    @endif
    @endif

</div>
@endsection