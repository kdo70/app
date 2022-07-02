<div class="event">
    <div class="event-header">
        <div class="event-title">
            <a href="">{{ $event->title }}</a>
        </div>
        <div class="event-date">
            {{$event->created_date}}
        </div>
    </div>
    <div class="event-desc">
        <p>
            {{ $event->content }}
        </p>
    </div>
    <div class="event-footer">
        <div class="event-author">
            Author: <a href="">{{$event->user->username}}</a>
            <i class="fas fa-star"></i>
        </div>
        <div class="event-counter">
            <div class="event-counter-item">
                <i class="far fa-eye"></i>
                5,912
            </div>
            <div class="event-counter-item">
                <i class="far fa-heart" aria-hidden="true"></i>
                {{$event->rating()}}
            </div>
            <div class="event-counter-item">
                <i class="far fa-comment" aria-hidden="true"></i>
                {{$event->comments->count()}}
            </div>
        </div>
        <div class="event-more">
            <a class="event-more-btn" href="{{route('web.index')}}">
                Back
            </a>
        </div>
    </div>
</div>
<div class="comment">
    <div class="comment-header">
        <div class="comment-title">
            Comments
        </div>
    </div>
    @foreach($event->comments as $comment)
        <div class="comment-item">
            <div class="comment-item-author">
                <div class="comment-item-name">
                    <a href="">{{$comment->username()}}</a>
                    <i class="fas fa-star"></i>
                </div>
                <img src="https://mmo-dev.info/data/avatars/o/10/10472.jpg?1558984357" width="100" height="100">
                <div>Messages: {{$comment->user->comments->count()}}</div>
                <div>Karma: {{$comment->user->ratings->sum('value')}}</div>
            </div>
            <div class="comment-item-content">
                <div class="comment-item-header">
                    {{$comment->created_date}}
                </div>
                {{$comment->content}}
            </div>
            <div class="comment-item-footer">
                <div class="comment-item-karma">
                    <i class="fa-solid fa-arrow-up"></i>
                    {{$comment->rating()}}
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
                <div class="comment-item-replay">
                    <a href="">Ответить</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
