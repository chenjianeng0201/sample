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

@push('scripts')
	<script src="{{ asset('js/static_pages/home.js') }}"></script>
@endpush
@stop
