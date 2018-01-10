@if (count($topics))

    <ul class="list-group">
        @foreach ($topics as $topic)
            <li class="list-group-item">
                <a href="{{ $topic->link(['#topic' . $topic->id]) }}">
                    {{ $topic->title }}
                </a>

                <div class="topic-content" style="margin: 6px 0;">
                    {!! $topic->content !!}
                </div>

                <div class="meta">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 回复于 {{ $topic->created_at->diffForHumans() }}
                </div>
            </li>
        @endforeach
    </ul>

@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $topics->appends(Request::except('page'))->render() !!}