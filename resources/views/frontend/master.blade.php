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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/sweetalert2.min.css') }}">

    <title>Rent It - Araç Kiralama</title>
    <link href="{{ asset('asset/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('asset/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

</head>

<body>
    <div class="wrapper ovh">
        @include('frontend.include.header')
        @include('frontend.include.signup')
        @include('frontend.include.sidebar')
        @include('frontend.include.search_modal')
        <div class="hiddenbar-body-ovelay"></div>
        @include('frontend.include.mobile_nav')

        <div class="body_content">

            @yield('home')

            @include('frontend.include.footer')
            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
    <script src="{{ asset('asset/js/jquery-3.6.4.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/i18n/datepicker-tr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="{{ asset('asset/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('asset/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.js') }}"></script>
    <script src="{{ asset('asset/js/parallax.js') }}"></script>
    <script src="{{ asset('asset/js/pricing-slider.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('asset/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('asset/js/validate.min.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
    @include('frontend.custom')
</body>

</html>
