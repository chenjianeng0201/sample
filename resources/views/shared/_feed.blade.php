@if(count($feed_items))
    <ol class="statuses">
        @foreach ($feed_items as $key => $status)
            @include('statuses._status', ['user' => $status->user, 'key' => $key])
        @endforeach
        <div class="layui-form-item paginate">
            {!! $feed_items->render() !!}
        </div>

    </ol>
@endif