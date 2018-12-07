@extends('layouts.default')
@section('title', $user->name)
@section('content')
    <div class="container">
        @include('shared._user_info', ['user'=>$user])
        @if(count($statuses) > 0)
            <ol id="user_statuses">
                @foreach($statuses as $key => $status)
                    @include('statuses._status', ['key' => $key])
                @endforeach
            </ol>
            {!! $statuses->render() !!}
        @endif
    </div>
@stop