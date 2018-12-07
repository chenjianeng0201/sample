@if(count($feed_items))
    <ol class="statuses">
        @foreach ($feed_items as $key => $status)
            @include('statuses._status', ['user' => $status->user, 'key' => $key])
        @endforeach
        {!! $feed_items->render() !!}
    </ol>
@endif