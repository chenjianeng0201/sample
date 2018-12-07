@extends('layouts.default')
@section('title', $user->name)
@section('content')
    <div class="container">
        @include('shared._user_info', ['user'=>$user])
        @if(count($statuses) > 0)
            <ol class="statuses">
                @foreach($statuses as $key => $status)
                    @include('statuses._status', ['key' => $key])
                @endforeach
            </ol>
            <div class="layui-form-item text-center">
                {!! $statuses->render() !!}
            </div>
        @endif
    </div>
@stop