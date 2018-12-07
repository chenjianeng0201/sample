<form class="layui-form" action="{{ route('statuses.store') }}" method="post" id="statuses_store">
    @include('shared._error')
    {{ csrf_field() }}
    <div class="layui-form-item">
        <textarea cols="50" rows="3" placeholder="聊聊···" name="content" class="form-control right"></textarea>
        <button type="submit" class="layui-btn layui-btn-normal right" lay-submit="">发布</button>
    </div>

</form>