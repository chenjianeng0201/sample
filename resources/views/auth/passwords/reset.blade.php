@extends('layouts.default')
@section('title', '更新密码')

@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <fieldset class="layui-elem-field">
            <legend>更新密码</legend>
            <div class="layui-field-box">
                <form class="layui-form" method="post" action="{{ route('password.update') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="layui-form-item form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="layui-form-label">邮箱</label>
                        <div class="layui-input-inline">
                            <input type="email" name="email" class="layui-input" value="{{ $email or old('email') }}" lay-verify="required" autofocus>
                        </div>
                    </div>
                    <div class="layui-form-item form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="layui-form-item form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" class="layui-input" value="" lay-verify="required" >
                        </div>
                    </div>
                    <div class="layui-form-item form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            @if($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="layui-form-item form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="layui-form-label">确认密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password_confirmation" class="layui-input" value="" lay-verify="required" >
                        </div>
                    </div>
                    <div class="layui-form-item form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            @if($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-inline">
                            <button class="layui-btn layui-btn-normal" type="submit">更新密码</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
@stop