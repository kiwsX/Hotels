<html class="boxed sticky-header-reveal">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Print Reservasi</title>

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
    <header id="header" class="header-effect-reveal" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 220, 'stickySetTop': '-66px'}">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="" width="192" height="55" src="{{url("image/logohotel.png")}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center pt-3 pb-3">
                                <li class="d-none d-sm-inline-flex ml-0">
                                    <div class="header-extra-info-icon">
                                        <i class="icon-location-pin icons text-color-primary"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label class="text-dark opacity-7">ADDRESS</label>
                                        <strong class="text-secondary">12 Braga Street</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-extra-info-icon">
                                        <i class="icon-phone icons text-color-primary"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label class="text-dark opacity-7">CALL US</label>
                                        <strong class="text-uppercase"><a href="tel:8001234567" class="text-secondary">089667723225</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">

        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-4 pb-0 text-uppercase">Bukti Reservasi</h4>
                                </div>
                            </div>
                            <table>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="bookNowFullName" class="form-control-label">NO Reservasi</label>
                                    <input type="text" class="form-control" id="bookNowFullName" value="{{$resi->id}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="bookNowFullName" class="form-control-label">Full Name Guest</label>
                                    <input type="text" class="form-control" id="bookNowFullName" value="{{$resi->nama}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="bookNowStreetAdd1" class="form-control-label">NIK</label>
                                    <input type="number" class="form-control" id="bookNowStreetAdd1" value="{{$resi->nik}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Phone Number</label>
                                    <input type="number" class="form-control" id="bookNowStreetAdd2" value="{{$resi->no_telp}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" class="form-control" id="bookNowStreetAdd2" value="{{$resi->email}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Address</label>
                                    <input type="text" class="form-control" id="bookNowCity" value="{{$resi->alamat}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Tanggal Check In</label>
                                    <input type="date" class="form-control" id="bookNowZip" value="{{$resi->tgl_check_in}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Tanggal Check Out</label>
                                    <input type="date" class="form-control" id="bookNowZip" value="{{$resi->tgl_check_out}}">
                                </div>
                            </div>
                                <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Lama Menginap</label>
                                    <input type="text" class="form-control" id="bookNowZip" value="{{$days}}">
                                </div>
                            </div>
                                <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Jumlah Kamar</label>
                                    <input type="text" class="form-control" id="bookNowZip" value="{{$resi->jumlah_kamar}}">
                                </div>
                            </div>
                                <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Jumlah Orang</label>
                                    <input type="number" class="form-control" id="bookNowZip" value="{{$resi->jumlah_orang}}">
                                </div>
                            </div>
                                <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Tipe Kamar</label>
                                    <input type="text" class="form-control" id="bookNowZip" value="{{$resi->kamars->nama_kamar}}">
                                </div>
                            </div><div class="form-row">
                                <div class="form-group col">
                                    <label class="form-control-label">Total Bayar</label>
                                    <input type="text" class="form-control" id="bookNowZip" value="Rp{{ number_format($resi->total_harga, 0, '', '.') }},00">
                                </div>
                            </div>
                            </table>
                        </section>

                        <div class="row sembunyi">
                            <div class="col-6">
                                <a href="#" onclick="window.print()" class="btn btn-primary btn-lg btn-block text-uppercase p-4 mb-4">Print Now</a>
                            </div>
                            <div class="col-6">
                                <a href="/" class="btn btn-primary btn-lg btn-block text-uppercase p-4 mb-4">Back</a>
                            </div>
                        </div>

                    </div>
                </div>

        </div>

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
