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
            Author: <a href="">Exeption</a>
            <i class="fas fa-star"></i>
        </div>
        <div class="event-counter">
            <div class="event-counter-item">
                <i class="far fa-eye"></i>
                5,912
            </div>
            <div class="event-counter-item">
                <i class="far fa-heart" aria-hidden="true"></i>
                111
            </div>
            <div class="event-counter-item">
                <i class="far fa-comment" aria-hidden="true"></i>
                542
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
    <div class="comment-item">
        <div class="comment-item-author">
            <div class="comment-item-name">
                <a href="">Exeption</a>
                <i class="fas fa-star"></i>
            </div>
            <img src="https://mmo-dev.info/data/avatars/o/10/10472.jpg?1558984357" width="100" height="100">
            Messages: {{rand(0,1000)}}
            Karma: {{rand(0,100)}}
        </div>
        <div class="comment-item-content">
            <div class="comment-item-header">
                {{$event->created_date}}
            </div>
            Aut excepturi velit vel natus doloribus vel quae. Aut enim et dolorum totam consectetur suscipit.
            Voluptatibus reiciendis veritatis inventore incidunt corrupti doloremque praesentium. Et nemo voluptatem
            tenetur qui voluptatem similique maxime doloremque. Perspiciatis saepe quibusdam quia molestias doloremque.
            Quaerat iusto laborum dolor in odio. Modi consectetur suscipit nam fugit consequatur impedit earum ut. Sed
            dolor ut aut dolores non aliquam maiores. Perferendis quis rerum eius enim odio velit ab vitae. Nihil vero
            et deserunt mollitia. Blanditiis rem cumque vero inventore quia nobis. Consequatur qui iusto recusandae
            ratione. Qui facilis eveniet et est est magnam assumenda. Dolores sit illo qui at aut voluptatum sed.
            Numquam voluptas quis reprehenderit vero autem ut. Iure fuga iure expedita aut dolores vel minima eos. Esse
            illo aspernatur explicabo consequatur sit et qui dolorum. Amet consectetur quia in. Atque a ut ut autem.
            Sunt eveniet quis nesciunt maxime itaque. Repudiandae et voluptas similique ratione. Optio veniam beatae
            facere consectetur. Temporibus suscipit dolorem officiis quis magnam repellat magni quos. Dolores ex
            voluptates dolorem at. Consectetur culpa ut omnis harum quas. Reprehenderit dolore sed distinctio voluptas
            nihil aut blanditiis. Reiciendis sed eius est explicabo. Temporibus enim quia veritatis. Qui est culpa
            provident accusamus autem pariatur non. Necessitatibus quo ex qui quo. Id accusantium a consequatur
            temporibus quis consequatur est. Repudiandae ratione velit ipsum aut id. Sunt non maiores veniam nisi ipsa
            nulla. Molestias tempore qui temporibus nobis qui qui enim voluptates. Asperiores qui est dolores
            voluptatem. Deleniti sint dolores sunt porro consequatur. Dolor aut quisquam nihil ab dolor corrupti qui.
            Inventore est ut quae ducimus sunt. Ab provident omnis sit consequuntur. Aut quos quos fugiat ut ut sint. Ea
            rerum in enim fugiat accusantium quidem autem exercitationem. Modi numquam et explicabo laboriosam fuga
            deserunt. Quis neque in et beatae magni. Dolore omnis esse dolorem. Alias eos dolores ratione consequuntur.
            Incidunt laudantium optio nemo ut.
        </div>
        <div class="comment-item-footer">
            <div class="comment-item-karma">
                <i class="fa-solid fa-arrow-up"></i>
                {{rand(0,100)}}
                <i class="fa-solid fa-arrow-down"></i>
            </div>
            <div class="comment-item-replay">
                <a href="">Ответить</a>
            </div>
        </div>
    </div>
</div>
