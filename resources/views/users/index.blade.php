@extends('layouts.default')
@section('title', '所有用户')
@section('content')
    <div class="container">
        <h1>所有用户</h1>
        <ul id="all_users" class="statuses">
            @foreach($users as $user)
                @include('users._user')
            @endforeach
        </ul>
        <div class="layui-form-item text-center">
            {!! $users->render() !!}
        </div>
    </div>
@stop