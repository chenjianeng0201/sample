<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Sample App')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('layui/css/layui.css') }}">
	<script type="text/javascript" src="{{ asset('layui/layui.js') }}"></script>
	@stack('scripts')
</head>
<body>
	<ul class="layui-nav" lay-filter="">
		<li class="layui-nav-item layui-this"><a href="#">首页</a></li>
		<li class="layui-nav-item"><a href="#">帮助</a></li>
		<li class="layui-nav-item right"><a href="#">登陆</a></li>
	</ul>
	@yield('content')
</body>
</html>