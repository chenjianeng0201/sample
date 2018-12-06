@extends('layouts.default')
@section('title', '更新个人资料')
@section('content')
    <div class="container">
        @include('shared._error')
        <fieldset class="layui-elem-field">
            <legend>更新个人资料</legend>
            <div class="layui-field-box">
                <form class="layui-form" method="post" action="{{ route('users.update', $user->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="layui-form-item">
                        <label class="layui-form-label">名称</label>
                        <div class="layui-input-inline">
                            <input type="name" name="name" class="layui-input" value="{{ $user->name }}" >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱</label>
                        <div class="layui-input-inline">
                            <input type="email" name="email" class="layui-input" value="{{ $user->email }}" disabled="disabled">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" class="layui-input" value="{{ old('password') }}" >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">更新密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password_confirmation" class="layui-input" value="{{ old('password_confirmation') }}" >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <button type="submit" class="layui-btn layui-btn-normal">更新</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
@stop