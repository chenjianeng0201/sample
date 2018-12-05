layui.use(['layer', 'form', 'element', 'carousel'], function(){
	var layer = layui.layer,
	form = layui.form,
	element = layui.element,
	carousel = layui.carousel;

	carousel.render({
		elem: '#slide_show',
		arrow: 'always',
	});
})