<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Sample App')</title>
    <meta charset="utf-8">
    {{--CSRF_TOKEN--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('layui/css/layui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script type="text/javascript" src="{{ asset('layui/layui.js') }}"></script>
	@stack('scripts')
</head>
<body>
    @include('layouts._header')
	@yield('content')
    @include('layouts._footer')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>