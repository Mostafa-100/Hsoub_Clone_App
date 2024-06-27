@extends('shared.template')

@section('content')
    <div class="login-wrapper">
        <div class="container">
            <div class="login">
                <form action="{{route('login')}}" method="post" class="auth__form">
                    @if(session()->has('login_fail'))
                        <div class="error-message">{{session('login_fail')}}</div>
                    @endif
                    @csrf
                    <div>
                        <label>البريد الإلكتروني</label>
                        <input class="auth__input" type="text" name="email" placeholder="أدخل البريد الإلكتروني">
                        @error('email')
                            <div class="validation-message">{{$message}}</div>
                        @enderror
                    </div>
                    <div>
                        <label>كلمة المرور</label>
                        <input class="auth__input" type="password" name="password" placeholder="أدخل كلمة المرور">
                        @error('password')
                            <div class="validation-message">{{$message}}</div>
                        @enderror
                    </div>
                    <input type="submit" value="دخول" class="auth__submit">
                </form>
            </div>
        </div>
    </div>
@endsection
