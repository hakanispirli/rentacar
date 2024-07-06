<header class="header-nav nav-innerpage-style menu-home4 main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <a class="header-logo" href="{{ route('index') }}"><img src="{{ ('asset/images/header-logo2.svg') }}"
                            alt="Header Logo"></a>
                </div>
                <div class="col-auto">
                    <!-- Responsive Menu Structure-->
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li class="visible_list"> <a class="list-item" href="{{ route('kurumsal') }}"><span
                            class="title">Kurumsal</span></a>
                        </li>
                        <li class="visible_list"> <a class="list-item" href="{{ route('araclar') }}"><span
                            class="title">Araçlar</span></a>
                        </li>
                        <li class="visible_list"> <a class="list-item" href="{{ route('sss') }}"><span
                            class="title">S.S.S.</span></a>
                        </li>
                        <li class="visible_list"> <a class="list-item" href="{{ route('iletisim') }}"><span
                            class="title">İletişim</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center">

                        @if(Auth::check() && (Auth::user()->role == 'user' || Auth::user()->role == 'admin'))

                        @php
                            $id = Auth::user()->id;
                            $profileData = App\Models\User::find($id);
                        @endphp

                        <a class="login-info d-flex align-items-center"
                        href="{{ route('dashboard') }}" role="button"><i
                            class="far fa-user-circle fz16 me-2"></i>
                            <span class="d-none d-xl-block">Hesabım</span>
                        </a>

                        @else

                        <a class="login-info d-flex align-items-center" data-bs-toggle="modal"
                            href="#exampleModalToggle" role="button"><i
                                class="far fa-user-circle fz16 me-2"></i>
                                <span class="d-none d-xl-block">Giriş / Kayıt</span>
                        </a>

                        @endif

                        <a class="sidemenu-btn filter-btn-right ml30" href="#">
                            <img src="{{ ('asset/images/dark-nav-icon.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
