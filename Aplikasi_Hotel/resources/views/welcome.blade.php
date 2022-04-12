@extends('layout.tamu',['title'=>'Home'])

@section('content')
        <div class="slider-container rev_slider_wrapper" style="height: 530px;">
            <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
                <ul>
                    <li data-transition="boxfade">

                        <img src="assets/img/kamar.jpg"
                             alt=""
                             data-bgposition="center bottom"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10"
                             class="rev-slidebg"
                             data-no-retina>
                    </li>
                    <li data-transition="boxfade">

                        <img src="assets/img/pool.jpg"
                             alt=""
                             data-bgposition="center bottom"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10"
                             class="rev-slidebg"
                             data-no-retina>
                    </li>
                    <li data-transition="boxfade">

                        <img src="assets/img/gym.jpg"
                             alt=""
                             data-bgposition="center bottom"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10"
                             class="rev-slidebg"
                             data-no-retina>
                    </li>
                </ul>
            </div>
        </div>

        <section class="section section-no-background section-no-border m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <h3 class="mt-4 mb-0 pb-0 text-uppercase">About Us</h3>
                        <div class="divider divider-primary divider-small mb-4 mt-0">
                            <hr class="mt-2 mr-auto">
                        </div>

                        <p class="mt-4">Hotel Hebat merupakan brand hotel yang pertama kali didirikan oleh Waringin Hospitality Hotel Group yang pertama kali berdiri pada tahun 2010 yaitu Hotel Hebat Braga 120 yang berada di Jalan Braga Street No.120, Kota Bandung. Dulunya Hotel Hebat adalah hotel berstandar internasional bintang 3, namun kini Hotel Hebat juga sudah berstandar hotel bintang 4. Hotel Hebat memiliki konsep "Feel at Home For Business", dengan interior bernuansa modern masa kini, kita juga akan dimanjakan seolah-olah berada di rumah sendiri.
                            Hotel Hebat memiliki 3 tipe kamar yaitu superior room, deluxe room, bahkan ada suite room. Dengan ukuran ruangan mulai dari 18m2 hingga 28m2. Didesain dengan kenyamanan yang dapat Anda nikmati untuk membuat istirahat Anda lebih baik saat berada di kamar kami.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="micro-map box-shadow-custom clearfix">
                            <div class="micro-map-info">
                                <div class="micro-map-info-detail">
                                    <i class="icon-location-pin icons text-color-primary"></i>
                                    <label>address</label>
                                    <strong>12 Braga Street, Bandung</strong>
                                </div>
                                <div class="micro-map-info-detail">
                                    <i class="icon-phone icons text-color-primary"></i>
                                    <label>call us</label>
                                    <strong>089667723225</strong>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="parallax section section-parallax section-center m-0 section-overlay-opacity section-overlay-opacity-scale-4" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="image/lobby.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="mb-1 mt-0 text-light text-uppercase">Enjoy the best of Hotel</h3>
                        <p class="lead text-light mb-4">Make your reservation right now with the best price</p>

                        <a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="{{route('pesan')}}">Book Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-no-background section-no-border m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="owl-carousel owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                            <div>
                                <img alt="" class="img-fluid" src="assets/img/Suite.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="assets/img/kamar.jpg">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">

                        <h3 class="mt-4 mb-0 pb-0 text-uppercase">Hotel Overview</h3>
                        <div class="divider divider-primary divider-small mb-4 mt-0">
                            <hr class="mt-2 mr-auto">
                        </div>

                        <p class="mt-4 mb-2">Nikmati kamar tamu kami yang elegan seluas 40 m², dirancang dengan warna krem hangat dan disesuaikan dengan kebutuhan wisatawan pribadi dan bisnis. Semua kamar memiliki kamar mandi marmer yang besar, tempat tidur double, AC, area kerja tambahan dengan akses internet gratis, dan bilik lemari. Kamar superior kami mengesankan dengan pemandangan kota yang indah dan taman yang berdekatan.</p>

                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> 24 Rooms, 4 Luxury suites</li>
                                    <li><i class="fas fa-check"></i> Fitness center</li>
                                    <li><i class="fas fa-check"></i> Airport transporation</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> 24-Hour In-Room Dining</li>
                                    <li><i class="fas fa-check"></i> Cocktail Bar</li>
                                    <li><i class="fas fa-check"></i> Dog Friendly - Pets Stay Free</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Valet car service</li>
                                    <li><i class="fas fa-check"></i> Pool</li>
                                    <li><i class="fas fa-check"></i> Free Wi-Fi</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>

@endsection
