<div class="post-comments">
    <header class="post-comments__header">
        <h4>التعليقات</h4>
        <div class="post-comments__dropdown-wrapper">
            <button id="post-comments-toggle" class="post-comments__toggle btn-primary">
                <span>الأفضل</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul class="post-comments__menu" id="post-comments-menu">
                <li class="post-comments__list-item">
                    <button class="post-comments__menu-btn">الأفضل</button>
                </li>
                <li class="post-comments__list-item">
                    <button class="post-comments__menu-btn">الأحدث</button>
                </li>
                <li class="post-comments__list-item">
                    <button class="post-comments__menu-btn">الأقدم</button>
                </li>
            </ul>
        </div>
    </header>
    @foreach($comments as $comment)
        @include('post-page.comment')
    @endforeach
</div>
