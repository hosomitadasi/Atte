@extends('layouts.app')

@section('content')
<div class="">
    <h1>ユーザー一覧</h1>
    <ul>
        @foreach ($users as $user)
        <li>
            <a href="{{ url('/users/' . $user->id . '/attendance') }}">{{ $user->name }}</a> (ID: {{ $user->id }})
        </li>
        @endforeach
    </ul>
</div>
@endsection