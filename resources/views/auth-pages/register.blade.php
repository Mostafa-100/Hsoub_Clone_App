@extends('shared.template')

@section('content')
    <div class="register-wrapper">
        <div class="container">
            <div class="register">
                <form action="{{route('register')}}" method="post" class="auth__form">
                    @csrf
                    <div>
                        <label>اسم المستخدم</label>
                        <input class="auth__input" type="text" name="username" placeholder="إكتب اسم المستخدم هنا">
                        @error('username')
                            <div class="validation-message">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="register__full-name">
                        <div>
                            <label>الاسم</label>
                            <input class="auth__input" type="text" name="firstname" placeholder="إكتب اسمك باللغة العربية">
                            @error('first_name')
                                <div class="validation-message">{{$message}}</div>
                            @enderror
                        </div>
                        <div>
                            <label>اسم العائلة</label>
                            <input class="auth__input" type="text" name="lastname" placeholder="إكتب اسم العائلة هنا باللغة العربية">
                            @error('last_name')
                                <div class="validation-message">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label>البريد الإلكتروني</label>
                        <input class="auth__input" name="email" type="text">
                        @error('email')
                            <div class="validation-message">{{$message}}</div>
                        @enderror
                    </div>
                    <div>
                        <label>كلمة المرور</label>
                        <input class="auth__input" name="password" type="password">
                        @error('password')
                            <div class="validation-message">{{$message}}</div>
                        @enderror
                    </div>
                    <input type="submit" value="تسجيل" class="auth__submit">
                </form>
            </div>
        </div>
    </div>
@endsection
