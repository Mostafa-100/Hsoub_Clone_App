<nav class="navbar">
    <div class="container">
        <div class="navbar__wrapper">

            <div class="navbar__side">
                <button class="navbar__btn navbar__offcanvas-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <a class="navbar__link" href="{{route('main.show')}}">
                    <img src="{{ url('/storage/assets/hsoub-logo.png') }}" class="navbar__img navbar__logo">
                </a>

                @auth
                    <a class="navbar__link" href="{{route('posts.create')}}">
                        <span>شارك</span>
                        <i class="fa-solid fa-plus"></i>
                    </a>
                @endauth
            </div>

            <div class="navbar__side">
                <div class="navbar__btn-menu-container">
                    <button class="navbar__btn navbar__menu">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                    <div class="navbar__profile-menu navbar__menu-content navbar__search-container">
                        <input type="text" class="navbar__search" placeholder="ابحث عن ...">
                    </div>
                </div>

                @auth
                    <div class="navbar__btn-menu-container">
                        <button class="navbar__btn navbar__menu">
                            <i class="fa-solid fa-envelope"></i>
                        </button>

                        <div class="navbar__profile-menu navbar__menu-content navbar__messages-first-container">
                            <div class="navbar__messages-container">
                                <div class="navbar__messages-empty">لا جديد حتى اللحظة</div>
                            </div>
                            <div class="navbar__little-link-container">
                                <a href="#" class="navbar__little-link">
                                    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                    <span>جميع الرسائل</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar__btn-menu-container">
                        <button class="navbar__btn navbar__menu">
                            <i class="fa-solid fa-bell"></i>
                        </button>

                        <div class="navbar__profile-menu navbar__menu-content navbar__notifications-first-container">
                            <div class="navbar__notification-container">
                                <div class="navbar__notifications">
                                    <div class="navbar__notification-img-container">
                                        <img class="navbar__notification-img" src="{{ url('storage/assets/profile.png') }}">
                                    </div>
                                    <div class="navbar__notification-detail-container">
                                        <div><a class="navbar__notification-title" href="#">Hikmat Jaafer علّق على
                                                مساهمتك: لمطوري الويب: هل أتعلم مجال
                                                الـ Back-end أم Full-stack؟</a></div>
                                        <div class="navbar__notification-time">
                                            <i class="fa-regular fa-clock" aria-hidden="true"></i>
                                            <span>منذ 14 يوم</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar__little-link-container">
                                    <a href="#" class="navbar__little-link">
                                        <i class="fa-solid fa-bell" aria-hidden="true"></i>
                                        <span>جميع الإشعارات</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar__btn-menu-container">
                        <button class="navbar__btn navbar__menu">
                            <img src="{{ url('/storage/assets/profile.png') }}" class="navbar__img navbar__profile">
                        </button>

                        <div class="navbar__profile-menu navbar__menu-content">
                            <ul class="navbar__nested-menu">
                                <li>
                                    <a class="navbar__nested-menu-link" href="#">
                                        <span><i class="fa-solid fa-user"></i></span>
                                        <span>mustapha03</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="navbar__nested-menu-link" href="#">
                                        <span><i class="fa-solid fa-bookmark"></i></span>
                                        <span>مفضلتي</span>
                                    </a>
                                </li>
                                <li>

                                    <a class="navbar__nested-menu-link" href="#">
                                        <span><i class="fa-solid fa-sliders"></i></span>
                                        <span>الإعدادات</span>
                                    </a>
                                </li>
                                <li>

                                    <a class="navbar__nested-menu-link" href="#">
                                        <span><i class="fa-solid fa-pen-to-square"></i></span>
                                        <span>تعديل الحساب</span>
                                    </a>
                                </li>

                                <li>

                                    <a class="navbar__nested-menu-link" href="{{route('logout')}}">
                                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                        <span>خروج</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endauth
                    @guest
                        <div class="navbar__guest-btns-container">
                            <a class="navbar__guest-btn" href="{{route('login')}}">
                               <i class="fa-solid fa-right-to-bracket"></i>
                                    <span>دخول</span>
                            </a>
                            <a class="navbar__guest-btn" href="{{route('register')}}">
                                <i class="fa-solid fa-user-plus"></i>
                                <span>حساب جديد</span>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
