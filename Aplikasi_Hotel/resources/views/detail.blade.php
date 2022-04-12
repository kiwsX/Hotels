@extends('layout.tamu',['title'=>'Detail'])

@section('content')
    <section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-light text-uppercase">Rooms<span class="d-block mt-2">Check out our amazing options</span></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-background section-no-border m-0 p-0">
        <div class="container">
            <div class="row mb-4">

                <div class="col">

                    <h3 class="mt-4 pt-4 mb-0 pb-0 text-uppercase">{{$kamar->nama_kamar}}</h3>
                    <div class="divider divider-primary divider-small mb-4 mt-0">
                        <hr class="mt-2 mr-auto">
                    </div>

                    <div class="row">
                        <div class="col-lg-7">

                            <p class="mt-4 lead">{{$kamar->deskripsi_kamar}}</p>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>Kamar Available</label>	<span>{{$kamar->ketersediaan}}</span></li>
                                    <li><label>Start From</label>	<span>Rp. {{number_format($kamar->harga_kamar,0,'','.')}},00/ night</span></li>
                                    <li>
                                        <a href="/pesan" class="room-suite-info-book" title="">Book Now</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-5">

                            <div class="owl-carousel owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                <div>
                                    <img src="{{url("assets/img/kamar.jpg")}}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <img src="{{url("assets/img/Suite.jpg")}}" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
