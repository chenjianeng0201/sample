@extends('layouts.default')
@section('title', '主页')
@section('content')
<div class="layui-carousel" id="slide_show" lay-filter="slide_show">
	<div carousel-item="">
		<div>轮播1</div>
		<div>轮播2</div>
		<div>轮播3</div>
		<div>轮播4</div>
	</div>
</div>
<form class="layui-form">	
<div class="layui-form-item">
	<label class="layui-label"></label>	
	<div class="layui-input-inline">
		<input type="text" name="test" class="layui-input" value="" placeholder="test">	
	</div>
</div>
<div class="layui-form-item">
	<label class="layui-label"></label>
	<div class="layui-input-inline">
		<a href="#" class="layui-btn layui-btn-normal">现在注册</a>
	</div>
</div>
</form>

@push('scripts')
	<script src="{{ asset('js/static_pages/home.js') }}"></script>
@endpush
@stop
