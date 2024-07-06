<header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-start d-flex align-items-center">
                        <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                            <a href="{{ route('dashboard') }}" class="logo"><img
                                    src="{{ asset('asset/images/header-logo2.svg') }}" alt=""></a>
                        </div>
                        <div class="fz20 ms-2 ms-xl-5">
                            <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam"><img
                                    src="{{ asset('images/dark-nav-icon.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-auto">
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li class="visible_list">
                            <a class="list-item" href="{{ route('kurumsal') }}">
                                <span class="title">Kurumsal</span>
                            </a>
                        </li>
                        <li class="visible_list">
                            <a class="list-item" href="{{ route('araclar') }}">
                                <span class="title">Araçlar</span>
                            </a>
                        </li>
                        <li class="visible_list">
                            <a class="list-item" href="{{ route('sss') }}">
                                <span class="title">S.S.S.</span>
                            </a>
                        </li>
                        <li class="visible_list">
                            <a class="list-item" href="{{ route('iletisim') }}">
                                <span class="title">İletişim</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-end header_right_widgets">
                        <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">
                            <li class="d-none d-sm-block"><a class="text-center mr15" href="page-login.html"><span
                                        class="flaticon-email"></span></a></li>
                            <li class="d-none d-sm-block"><a class="text-center mr20 notif" href="#"><span
                                        class="flaticon-bell"></span></a></li>
                            <li class=" user_setting">
                                <div class="dropdown">
                                    <a class="btn" href="#" data-bs-toggle="dropdown">
                                        <img src="{{ asset('images/favicon.png') }}"
                                            style="max-width: 40px; max-height: 40px;" alt="user.png">
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="user_setting_content">
                                            <p class="fz15 fw400 ff-heading mb20">MAIN</p>
                                            <a class="dropdown-item active" href="page-dashboard.html"><i
                                                    class="flaticon-discovery mr10"></i>Dashboard</a>
                                            <a class="dropdown-item" href="page-dashboard-message.html"><i
                                                    class="flaticon-chat-1 mr10"></i>Message</a>
                                            <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
                                            <a class="dropdown-item" href="page-dashboard-add-property.html"><i
                                                    class="flaticon-new-tab mr10"></i>Add New Property</a>
                                            <a class="dropdown-item" href="page-dashboard-order.html"><i
                                                    class="flaticon-home mr10"></i>My Properties</a>
                                            <a class="dropdown-item" href="page-dashboard-favorites.html"><i
                                                    class="flaticon-like mr10"></i>My Favorites</a>
                                            <a class="dropdown-item" href="page-dashboard-savesearch.html"><i
                                                    class="flaticon-search-2 mr10"></i>Saved Search</a>
                                            <a class="dropdown-item" href="page-dashboard-review.html"><i
                                                    class="flaticon-review mr10"></i>Reviews</a>
                                            <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
                                            <a class="dropdown-item" href="page-dashboard-package.html"><i
                                                    class="flaticon-protection mr10"></i>My Package</a>
                                            <a class="dropdown-item" href="page-dashboard-profile.html"><i
                                                    class="flaticon-user mr10"></i>My Profile</a>
                                            <a class="dropdown-item" href="page-login.html"><i
                                                    class="flaticon-exit mr10"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
