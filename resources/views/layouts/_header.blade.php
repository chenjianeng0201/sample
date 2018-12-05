<ul class="layui-nav" lay-filter="">
    <li class="layui-nav-item @if(Route::currentRouteName() === 'home') layui-this @endif"><a href="{{ route('home') }}">首页</a></li>
    <li class="layui-nav-item @if(Route::currentRouteName() === 'help') layui-this @endif"><a href="{{ route('help') }}">帮助</a></li>
    <li class="layui-nav-item @if(Route::currentRouteName() === 'about') layui-this @endif"><a href="{{ route('about') }}">关于</a></li>
    <li class="layui-nav-item right"><a href="#">登陆</a></li>
    <li class="layui-nav-item right @if(Route::currentRouteName() === 'signup') layui-this @endif"><a href="{{ route('signup') }}">注册</a></li>
</ul>