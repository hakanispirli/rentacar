<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Homez - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">

    <title>Rent It - Yönetici Paneli</title>
    <link href="{{ asset('images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('images/favicon.png') }}" sizes="128x128" rel="shortcut icon" />
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/dashbord_navitaion.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/toastr.min.css') }}">
    <script src="{{ asset('asset/js/jquery-3.6.4.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('asset/summernote/summernote-bs4.min.css') }}">

</head>

<body>
    <div class="wrapper">
        @include('backend.include.header')
        @include('backend.include.sidebar')
        @include('backend.include.mobile_nav')

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-xl">
                <div class="dashboard__sidebar d-none d-lg-block">
                    <div class="dashboard_sidebar_list">
                        <div class="sidebar_list_item">
                            <a href="{{ route('admin.dashboard') }}" class="items-center {{ request()->routeIs('admin.dashboard') ? '-is-active' : '' }}"><i
                                    class="flaticon-home mr15"></i>Kontrol Paneli</a>
                        </div>
                        <div class="sidebar_list_item">
                            <a href="{{ route('admin.araclar') }}" class="items-center {{ request()->routeIs('admin.araclar') ? '-is-active' : '' }} mt10"><i
                                    class="flaticon-garage mr15"></i>Araçlar</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="{{ route('admin.paketler') }}" class="items-center {{ request()->routeIs('admin.paketler') ? '-is-active' : '' }} mt10"><i
                                    class="flaticon-caravan mr15"></i>Paketler</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="#" class="items-center mt10"><i
                                    class="flaticon-clock mr15"></i>Rezervasyonlar</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="{{ route('admin.kampanyalar') }}" class="items-center {{ request()->routeIs('admin.kampanyalar') ? '-is-active' : '' }} mt10"><i
                                    class="flaticon-favourite mr15"></i>Kampanyalar</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="{{ route('admin.blog') }}" class="items-center {{ request()->routeIs('admin.blog') ? '-is-active' : '' }} mt10"><i
                                    class="flaticon-share-1 mr15"></i>Blog</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="{{ route('admin.faq') }}" class="items-center {{ request()->routeIs('admin.faq') ? '-is-active' : '' }} mt10"><i
                                    class="flaticon-search-2 mr15"></i>S.S.S.</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="#" class="items-center mt10"><i
                                    class="flaticon-settings mr15"></i>Site Ayarları</a>
                        </div>

                        <div class="sidebar_list_item">
                            <a href="{{ route('logout') }}" class="items-center mt10"><i
                                    class="flaticon-logout mr15"></i>Çıkış</a>
                        </div>
                    </div>
                </div>
                <div class="dashboard__main pl0-md">
                    <div class="dashboard__content bgc-f7">
                        <div class="row pb40">
                            <div class="col-lg-12">
                                <div class="dashboard_navigationbar d-block d-lg-none">
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">
                                            <i class="fa fa-bars pr10"></i>
                                            Dashboard Navigation
                                        </button>
                                        <ul id="myDropdown" class="dropdown-content">
                                            <li class="active">
                                                <a href="{{ route('dashboard') }}">
                                                    <i class="flaticon-discovery mr10"></i>
                                                    Kontrol Paneli
                                                </a>
                                            </li>
                                            <li>
                                                <p class="fz15 fw400 ff-heading mt30 pl30">İçerik Yönetimi</p>
                                            </li>
                                            <li>
                                                <a href="page-dashboard-add-property.html">
                                                    <i class=""></i>
                                                    Yeni Daire Ekle
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="flaticon-home mr10"></i>
                                                    Daireler
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="flaticon-search-2 mr10"></i>
                                                    Blog Yazısı Ekle
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="flaticon-review mr10"></i>
                                                    Blog Yazıları
                                                </a>
                                            </li>
                                            <li>
                                                <p class="fz15 fw400 ff-heading mt30 pl30">Hesap Yönetimi</p>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="flaticon-user mr10"></i>
                                                    Hesap Ayarları
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="flaticon-protection mr10"></i>
                                                    Site Ayarları
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="{{ route('logout') }}">
                                                    <i class="flaticon-exit mr10"></i>
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @yield('adminDashboard')

                    </div>
                </div>
            </div>
        </div>
        @include('backend.include.footer')
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <script src="{{ asset('asset/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('asset/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('asset/js/dashboard-script.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script src="{{ asset('asset/summernote/summernote-bs4.min.js') }}"></script>
</body>

</html>
