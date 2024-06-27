@extends('shared.template')

@section('content')
    <main class=".main">
        <div class="container">
            @include('shared.bar')
            <div class="main__wrapper">
                <div class="posts">
                    @foreach($posts as $post)
                        @include('main-page.post-box')
                    @endforeach
                    <button class="main__show-more">اعرض المزيد</button>
                </div>
                @include('shared.sidebar')
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    @vite([
        'resources/js/shared-script.js',
        'resources/js/community-box-script.js',
    ])
@endsection
