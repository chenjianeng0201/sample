<div class="layui-form-item text-center">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar" />
    </a>
    <h2>{{ $user->name }}</h2>
    @include('shared._stats')
    @if($user->id !== Auth::user()->id)
        <div id="follow_form" class="layui-form-item">
            @if(Auth::user()->isFollowing($user->id))
                <form action="{{ route('followers.destroy', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="layui-btn layui-btn-primary">取消关注</button>
                </form>
            @else
                <form action="{{ route('followers.store', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="layui-btn layui-btn-normal">关注</button>
                </form>
            @endif
        </div>
    @endif
</div>