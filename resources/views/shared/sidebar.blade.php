<aside>
@if(preg_match('/posts\/[0-9]+/', request()->path()))
    <div class="communites selected-community">
        <div class="communites__header">{{$post->community->name}}</div>
        <div class="communites__box-wrapper">
            <div class="communites__box">
                <div class="communites__description">{{$post->community->description}}
                </div>
                <div class="communites__followers-number">{{$post->community->followers_count / 1000}} ألف متابع</div>
            </div>
        </div>
    </div>
@endif

<div class="communites">
    <div class="communites__header">مجتمعات قد يهمك متابعتها</div>
    @include('shared.community-box')
    @include('shared.community-box')
    <div class="communites__more-wrapper">
        <div class="communites__more">
            <a href="#" class="btn-primary">المزيد</a>
        </div>
    </div>
</div>
    @if($show_last_comments)
        @include('shared.last-comments')
    @endif
</aside>
