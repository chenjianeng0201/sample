<ul class="layui-nav" lay-filter="">
    <li class="layui-nav-item @if(Route::is('home')) layui-this @endif"><a href="{{ route('home') }}">首页</a></li>
    <li class="layui-nav-item @if(Route::is('help')) layui-this @endif"><a href="{{ route('help') }}">帮助</a></li>
    <li class="layui-nav-item @if(Route::is('about')) layui-this @endif"><a href="{{ route('about') }}">关于</a></li>
    @if( Auth::check())
        <li class="layui-nav-item right @if(Route::is('users.*')) layui-this @endif" lay-unselect="">
            <a href="javascript:;"><img src="{{ Auth::user()->gravatar('140') }}" alt="{{ Auth::user()->name }}" class="layui-nav-img" /></a>
            <dl class="layui-nav-child">
                <dd><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></dd>
                <dd><a href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></dd>
                <dd><a href="{{ route('logout')}}">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item right">
            <a href="{{ route('users.index') }}">用户列表</a>
        </li>
        @else
        <li class="layui-nav-item right @if(Route::is('login')) layui-this @endif"><a href="{{ route('login') }}">登录</a></li>
        <li class="layui-nav-item right @if(Route::is('signup')) layui-this @endif"><a href="{{ route('signup') }}">注册</a></li>
    @endif
</ul>
<script type="text/javascript">
    layui.use(['element'], function(){
        var element = layui.element;
    });
</script>