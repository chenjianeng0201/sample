<li>
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    <div class="layui-input-inline all_user_info" >
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}[{{ $user->email }}]</a>
    </div>
    @can('destroy', $user)
        <div class="layui-input-inline">
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="layui-btn layui-btn-danger">删除</button>
        </form>
        </div>
    @endcan
</li>