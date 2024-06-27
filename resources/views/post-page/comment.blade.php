<div class="comment fist-comment">
    <div class="posts__header">
        <div class="posts__voting">
            <div><i class="fa-solid fa-chevron-up posts__arrow"></i></div>
            <div>{{$comment->votes_count}}</div>
            <div><i class="fa-solid fa-chevron-down posts__arrow"></i></div>
        </div>
        <div class="posts__info">
            <div class="posts__user-info">
                <img src="{{ url('storage/assets/profile.png') }}" class="posts__profile">
                <span class="posts__username">{{$comment->user->full_name}}</span>
            </div>
            <div class="posts__post-info">
                <span class="posts__little-info"><i class="fa-regular fa-clock"></i> {{$comment->created_at->diffForHumans()}}</span>
                <span class="posts__topic-link" href="#"><i class="fa-solid fa-share"></i> أضف ردا</span>
                <div class="comment__more-parent">
                    <div class="comment__more-first-btn">
                        <span>المزيد</span>
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                    <div class="comment__more-container">
                        <a class="comment__more-btn" href="#"><i class="fa-regular fa-bookmark"></i> أضف إلى المفضلة</a>
                        <a class="comment__more-btn" href="#"><i class="fa-solid fa-link"></i> رابط مختصر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comment__content">
        {{$comment->content}}
    </div>
</div>
