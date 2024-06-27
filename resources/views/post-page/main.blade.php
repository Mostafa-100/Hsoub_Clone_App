@extends('shared.template')

@section('content')
    <div class="container">
        <h1 class="post__title">{{$post->title}}</h1>
        <div class="post-showing">
            <div class="post-showing__content">
                @include('post-page.post-place')
                <div class="post-showing__writing-place-container">
                    @auth
                        <form action="{{route('comments.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <x-post-writing action="{{route('comments.store')}}" method="post">
                                <input type="submit" value="أضف ردا" class="btn-primary writing-place__submit">
                            </x-post-writing>
                        </form>
                    @endauth
                </div>
                <div class="post-showing__comments">
                    @include('post-page.post-comment')
                </div>
            </div>
            <aside class="post-showing__sidebar">
                @include('shared.sidebar')
            </aside>
        </div>
    </div>
@endsection
@section('scripts')
    @vite([
        'resources/js/post-page-script.js',
        'resources/js/shared-script.js',
        'resources/js/community-box-script.js',
    ])
@endsection
