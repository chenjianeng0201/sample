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
<div class="container">
    <section>
        @include('shared._status_form')
    </section>
    <h3>微博列表</h3>
    @include('shared._feed')
</div>

<script type="text/javascript">
    layui.use(['carousel'], function(){
        var carousel = layui.carousel;

        carousel.render({
            elem: '#slide_show',
            arrow: 'always',
        });
    });
</script>
@stop
