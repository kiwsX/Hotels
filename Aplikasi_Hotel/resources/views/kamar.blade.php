@extends('layout.tamu',['title'=>'Kamar'])

@section('content')
    <section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-light text-uppercase">Rooms<span class="d-block mt-2">Check out our 		 options</span></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-background section-no-border m-0 p-0">
        <div class="container">
            <div class="row mb-4">

                <div class="col">

                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <ul class="nav nav-pills nav-pills-center sort-source text-2 text-uppercase my-4 py-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                                <li class="nav-item active"><a class="nav-link active">Our Rooms</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                            @foreach($kamar as $k)
                            <div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
                                <a href="{{route('detailkamar',['id'=>$k->id])}}">
                                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('storage/' . $k->foto_kamar)}}" class="img-fluid">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">View Details</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <h5 class="mt-3 mb-0">{{$k->nama_kamar}}</h5>
                                <div class="room-suite-info">
                                    <ul>
                                        @foreach($k->fasilitas()->get() as $f)
                                        <li><label>{{$f->nama_fasilitaskmr}}</label></li>
                                        @endforeach
                                        <li>
                                            <a href="{{route('detailkamar',['id'=>$k->id])}}" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
                                            <a href="{{route('pesan')}}" class="room-suite-info-book" title="">Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
