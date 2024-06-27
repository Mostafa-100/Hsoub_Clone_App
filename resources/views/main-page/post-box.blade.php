<div class="posts__post">
    @include('shared.user-snippet')
    <div class="posts__content">
        <h3 class="posts__title"><a href="{{route('posts.show', $post->id)}}" class="posts__post-link">{{$post->title}}</a></h3>
        <p class="posts__description">{{Str::words($post->content, 40)}}</p>
    </div>
</div>
