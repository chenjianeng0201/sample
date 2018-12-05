@extends('layouts.default')
@section('title', '登陆')
@section('content')
    <div class="container">
        @include('shared._error')
        <fieldset class="layui-elem-field">
            <legend>登陆</legend>
            <div class="layui-field-box">
                <form class="layui-form" method="post" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱{{ old('email') }}</label>
                        <div class="layui-input-inline">
                            <input type="email" name="email" class="layui-input" value="{{ old('email') }}" >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" class="layui-input" value="{{ old('password') }}" >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <button type="submit" class="layui-btn layui-btn-normal">登陆</button>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <input type="checkbox" name="remember" lay-skin="primary" title="记住我">
                        </div>
                    </div>
                    <hr>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <a href="{{ route('signup') }}">现在注册</a>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
<script type="text/javascript">
    layui.use(['form'], function(){
        var form = layui.form;
    });
</script>
@stop