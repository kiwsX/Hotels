<header id="header" class="header-effect-reveal" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 220, 'stickySetTop': '-66px'}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-simple-border-bottom">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center pt-3 pb-3">
                                <li class="d-none d-sm-inline-flex ml-0">
                                    <div class="header-extra-info-icon">
                                        <i class="icon-location-pin icons text-color-primary"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label class="text-light opacity-7">ADDRESS</label>
                                        <strong class="text-light">12 Braga Street</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-extra-info-icon">
                                        <i class="icon-phone icons text-color-primary"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label class="text-light opacity-7">CALL US</label>
                                        <strong class="text-uppercase"><a href="tel:8001234567" class="text-light">089667723225</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center pt-3 pb-3">
                                <li class="d-none d-lg-inline-flex ml-0">
                                    <div class="header-extra-info-icon">
                                        <i class="icon-share icons text-color-primary"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label class="text-light opacity-7">FOLLOW US</label>
                                        <strong class="text-uppercase text-2">
                                            <a class="pr-3 text-light" href="https://www.instagram.com/pullohhh_/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i> <span>Instagram</span></a>
                                            <a class="pr-3 text-light" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
                                            <a class="text-light" href="https://twitter.com/rikisaepulloh27" target="_blank" title="Twitter"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
                                        </strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('home')}}">
                                <img alt="Porto" width="192" height="55" src="{{url("image/logohotel.png")}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <x-nav-item-tamu label="Home" :link="route('home')"/>
                                        </li>
                                        <li>
                                            <x-nav-item-tamu label="Room" :link="route('kamar')"/>
                                        </li>
                                        <li>
                                            <x-nav-item-tamu label="Facility" :link="route('fasilitas')"/>
                                        </li>
                                        <li>
                                            <x-nav-item-tamu label="Book Now" :link="route('pesan')"/>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
