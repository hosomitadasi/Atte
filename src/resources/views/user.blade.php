@extends('layouts.app')

@section('content')
<div class="user-content">
    <table class="user-content_table">
        <tr>
            <th>会員No</th>
            <th>会員名簿</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{!! nl2br(htmlspecialchars($user->id)) !!}</td>
            <td><a>{!! nl2br(htmlspecialchars($user->name)) !!}</a></td>
        </tr>
        @endforeach
    </table>
    <table class="user-content_table">
        <tr>
            <th>会員No</th>
            <th>会員名簿</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{!! nl2br(htmlspecialchars($user->id)) !!}</td>
            <td><a>{!! nl2br(htmlspecialchars($user->name)) !!}</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection