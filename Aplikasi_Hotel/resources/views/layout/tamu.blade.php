<!DOCTYPE html>
<html class="boxed sticky-header-reveal">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{isset($title) ? $title. ' | ' .config('app.name') : ' '}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="image/hotel.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{url("assets/vendor/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/animate/animate.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/simple-line-icons/css/simple-line-icons.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/owl.carousel/assets/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/magnific-popup/magnific-popup.min.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css")}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{url("assets/css/theme.css")}}">
    <link rel="stylesheet" href="{{url("assets/css/theme-elements.css")}}">
    <link rel="stylesheet" href="{{url("assets/css/theme-blog.css")}}">
    <link rel="stylesheet" href="{{url("assets/css/theme-shop.css")}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{url("assets/vendor/rs-plugin/css/settings.css")}}">
    <link rel="stylesheet" href="{{url("assets/vendor/rs-plugin/css/layers.cs")}}s">
    <link rel="stylesheet" href="{{url("assets/vendor/rs-plugin/css/navigation.css")}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{url("assets/css/demos/demo-hotel.css")}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{url("assets/css/skins/skin-hotel.css")}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url("assets/css/custom.css")}}">

    <!-- Head Libs -->
    <script src="{{url("assets/vendor/modernizr/modernizr.min.js")}}"></script>

</head>

<body>
    <div class="body">
<!-- As a link -->
    @include('layout.inc_tamu.navbar')


        <div role="main" class="main">

            @yield('content')

        </div>
        @include('layout.inc_tamu.footer')
    </div>

    <div class="footer-copyright text-center">
        <div class="container">
            <p>© Copyright 2020. All Rights Reserved.</p>
        </div>
    </div>
    <script src="{{url("assets/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.appear/jquery.appear.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.cookie/jquery.cookie.min.js")}}"></script>
    <script src="{{url("assets/vendor/popper/umd/popper.min.js")}}"></script>
    <script src="{{url("assets/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{url("assets/vendor/common/common.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.validation/jquery.validate.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.gmap/jquery.gmap.min.js")}}"></script>
    <script src="{{url("assets/vendor/jquery.lazyload/jquery.lazyload.min.js")}}"></script>
    <script src="{{url("assets/vendor/isotope/jquery.isotope.min.js")}}"></script>
    <script src="{{url("assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
    <script src="{{url("assets/vendor/magnific-popup/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{url("assets/vendor/vide/jquery.vide.min.js")}}"></script>
    <script src="{{url("assets/vendor/vivus/vivus.min.js")}}"></script>
    <script src="{{url("assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js")}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{url("assets/js/theme.js")}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{url("assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js")}}"></script>
    <script src="{{url("assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js")}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{url("assets/js/views/view.contact.js")}}"></script>

    <!-- Demo -->
    <script src="{{url("assets/js/demos/demo-hotel.js")}}"></script>

    <!-- Theme Custom -->
    <script src="{{url("assets/js/custom.js")}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{url("assets/js/theme.init.js")}}"></script>
</body>
</html>
