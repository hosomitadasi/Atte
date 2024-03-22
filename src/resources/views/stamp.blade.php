@extends('layouts.app')

@section('content')
@if (session('result'))
<div class="flash_message">
    {{ session('result') }}
</div>
@endif
@if( Auth::check() )
<p class="welcome">{{ Auth::user()->name}}さんお疲れ様です！</p>
@endif
<div class="stamp-content">
    @if(!isset($is_work_start))
    <a href="/work/start" class="time-button">勤務開始</a>
    @else
    <p class="time-button inactive">勤務開始</p>
    @endif

    @if(!isset($is_work_end))
    <a href="/work/end" class="time-button">勤務終了</a>
    @else
    <p class="time-button inactive">勤務終了</p>
    @endif

    @if(isset($is_rest))
    @if(!$is_rest)
    <a href="/break/start" class="time-button">休憩開始</a>
    @else
    <p class="time-button inactive">休憩開始</p>
    @endif
    @endif

    @if(isset($is_rest))
    @if($is_rest)
    <a href="/break/end" class="time-button">休憩終了</a>
    @else
    <p class="time-button inactive">休憩終了</p>
    @endif
    @endif

</div>
@endsection