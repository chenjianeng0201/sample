@extends('layouts.default')
@section('title', '注册')
@section('content')
    <div class="container">
        @include('shared._error')
        <fieldset class="layui-elem-field">
            <legend>注册</legend>
            <div class="layui-field-box">
                <form method="post" action="{{ route('users.store') }}" class="layui-form">
                    {{ csrf_field() }}
                    <div class="layui-form-item">
                        <label class="layui-form-label">名称</label>
                        <div class="layui-input-inline">
                            <input type="text" name="name" class="layui-input" placeholder="名称" value="{{ old('name') }}" autocomplete="off" lay-verify="required">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱</label>
                        <div class="layui-input-inline">
                            <input type="email" name="email" class="layui-input" placeholder="邮箱" value="{{ old('email') }}" autocomplete="off" lay-verify="required|email">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" class="layui-input" placeholder="密码" value="{{ old('password') }}" autocomplete="off" lay-verify="required">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">确认密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password_confirmation" class="layui-input" placeholder="确认密码" value="{{ old('password_confirmation') }}" autocomplete="off" lay-verify="required">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <button class="layui-btn layui-btn-normal" type="submit">注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
@stop