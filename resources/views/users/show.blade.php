@extends('layouts.default')
@section('title', $user->name)
@section('content')
    <div class="container">
        @include('shared._user_info', ['user'=>$user])
        @if(count($statuses) > 0)
            <ol id="user_statuses">
                @foreach($statuses as $status)
                    @include('statuses._status')
                @endforeach
            </ol>
            {!! $statuses->render() !!}
        @endif
    </div>
@stop