@extends('shared.template')

@section('content')
    <div class="add-post">
        <div class="container">
            <header>
                <h2 class="add-post__title">أضف مساهمة</h2>
                <p class="add-post__description">شارك مواضيع مثيرة للاهتمام</p>
            </header>
            <main class="add-post__main">
                <form action="{{route('posts.store')}}" method="post" class="add-post__content">
                    @csrf
                    <label class="add-post__label">المجتمع</label>
                    <div class="add-post__select-section">
                        <div class="add-post__select-container">
                            <div class="add-post__chosen-community add-post__input">
                                <span data-id="{{$first_community->id}}">{{$first_community->name}}</span>
                                <i class="fa-solid fa-caret-down add-post__arrow"></i>
                            </div>
                            <div class="add-post__select-box">
                                <div class="add-post__search-community-container">
                                    <input type="text" class="add-post__search-community">
                                </div>
                                <ul class="add-post__community-list">
                                    @foreach($communities as $community)
                                        <li data-id="{{$community->id}}">{{$community->name}}</li>
                                    @endforeach
                                    <input type="hidden" name="chosen_community" id="chosen-community" value="">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="add-post__post-title">
                        <label class="add-post__label">عنوان المساهمة</label>
                        <input type="text" class="add-post__input" name="post-title">
                        @error('post-title')
                            <div class="validation-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="add-post__post-content">
                        <label class="add-post__label">محتوى المساهمة</label>
                        <x-post-writing>
                            <input type="submit" value="أرسل" class="btn-primary writing-place__submit">
                        </x-post-writing>
                    </div>
                </form>
                @include('shared.sidebar')
            </main>
        </div>
    </div>
@endsection
@section('scripts')
    @vite([
        'resources/js/add-post-page-script.js',
        'resources/js/shared-script.js',
        'resources/js/community-box-script.js',
    ])
@endsection
