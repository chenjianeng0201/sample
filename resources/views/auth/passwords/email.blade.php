@extends('layouts.default')
@section('title', '重置密码')

@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <fieldset class="layui-elem-field">
            <legend>重置密码</legend>
            <div class="layui-field-box">
                <form class="layui-form" method="post" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱</label>
                        <div class="layui-input-inline">
                            <input type="email" name="email" class="layui-input" value="{{ old('email') }}" lay-verify="required">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <button class="layui-btn layui-btn-normal" type="submit">发送密码重置邮件</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
@stop