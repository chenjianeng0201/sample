@extends('layouts.default')
@section('title', $title)

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <ul>
            @foreach($users as $user)
                <li>
                    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
                    <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
        <div class="layui-form-item text-center">
            {!! $users->render() !!}
        </div>
    </div>
@stop