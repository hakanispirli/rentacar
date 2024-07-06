<div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
        <div class="header innerpage-style">
            <div class="menu_and_widgets">
                <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                    <a class="menubar" href="#menu"><img src="{{ ('asset/images/mobile-dark-nav-icon.svg') }}" alt=""></a>
                    <a class="mobile_logo" href="#"><img src="{{ ('asset/images/header-logo2.svg') }}" alt=""></a>
                    <a href="{{ route('login') }}"><span class="icon fz18 far fa-user-circle"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
        <ul>
            <li>
                <a href="{{ route('kurumsal') }}"> <span>Kurumsal</span></a>
            </li>
            <li>
                <a href="{{ route('araclar') }}"> <span>Araçlar</span></a>
            </li>
            <li>
                <a href="{{ route('sss') }}"> <span>S.S.S.</span></a>
            </li>
            <li>
                <a href="{{ route('iletisim') }}"> <span>İletişim</span></a>
            </li>
            <hr><span class="hr_top_text"></span>
            <li style="padding-bottom: 20px; padding-top: 20px;">
                <a href="{{ route('login') }}" class="ud-btn btn-thm text-white">Giriş<i
                        class="fal fa-arrow-right-long"></i></a>
            </li>

            <li style="padding-top: -50px;">
                <a href="{{ route('register') }}" class="ud-btn btn-thm text-white">Kayıt Ol<i
                        class="fal fa-arrow-right-long"></i></a>
            </li>
            <!-- Only for Mobile View -->
        </ul>
    </nav>
</div>
