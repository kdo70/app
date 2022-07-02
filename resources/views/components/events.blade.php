@foreach($paginator as $event)
    <div class="event">
        <div class="event-header">
            <div class="event-title">
                <a href="{{route('web.event',  $event->slug)}}">{{ $event->title }}</a>
            </div>
            <div class="event-date">
                {{$event->created_date}}
            </div>
        </div>
        <div class="event-desc">
            <p>
                {{ $event->preview_content }}
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
                <a class="event-more-btn" href="{{route('web.event',  $event->slug)}}">
                    Details
                </a>
            </div>
        </div>
    </div>
@endforeach
{{$paginator->links('vendor.pagination.custom')}}
