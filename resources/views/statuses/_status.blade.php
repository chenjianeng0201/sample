<li>
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
    </a>
    <a href="{{ route('users.show', [$user->id]) }}">
        {{ $user->name }}

    </a>
    <span class="right">{{ $status->created_at->diffForHumans() }} #{{ $key+1 }}</span>
    <div class="layui-input-block">
        {{ $status->content }}
    </div>
</li>