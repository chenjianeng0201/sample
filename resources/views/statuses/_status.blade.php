<li>
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
    </a>
    <a href="{{ route('users.show', [$user->id]) }}">
        {{ $user->name }}
    </a>
    <span class="right">{{ $status->created_at->diffForHumans() }} #{{ $key+1 }}</span>
    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="layui-btn layui-btn-danger right" >删除</button>
        </form>
    @endcan
    <div class="layui-input-block">
        {{ $status->content }}
    </div>
</li>