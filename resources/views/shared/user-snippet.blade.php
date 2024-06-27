<div class="posts__header">
    <div class="posts__voting">
        <div><i class="fa-solid fa-chevron-up posts__arrow"></i></div>
        <div>{{$post->votes_count}}</div>
        <div><i class="fa-solid fa-chevron-down posts__arrow"></i></div>
    </div>
    <div class="posts__info">
        <div class="posts__user-info">
            <img src="{{ url('storage/assets/profile.png') }}" class="posts__profile">
            <span class="posts__username">{{$post->user->full_name}}</span>
        </div>
        <div class="posts__post-info">
            <a class="posts__topic-link" href="#"><i class="fa-solid fa-bars"></i>{{$post->community->name}}</a>
            <span class="posts__little-info"><i class="fa-regular fa-clock"></i> {{$post->created_at->diffForHumans()}}</span>
            <span class="posts__little-info"><i class="fa-solid fa-comment"></i> {{$post->comments->count()}} تعليق</span>

        </div>
    </div>
</div>
