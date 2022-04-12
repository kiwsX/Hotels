@extends('layout.tamu',['title'=>'Fasilitas'])

@section('content')
    <section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-light text-uppercase">Facility<span class="d-block mt-2">Check out our 		 options</span></h1>
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
                                <li class="nav-item active"><a class="nav-link active">Our Facility</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                            @foreach($fasilitas as $f)
                            <div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ url('storage/' . $f->foto_fasilitashtl) }}" class="img-fluid">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$f->nama_fasilitashtl}}</span>
                                            </span>
                                    </span>
                                </span>
                                <h5 class="mt-3 mb-0">Deskripsi</h5>
                                <div class="room-suite-info">
                                    <span>{{$f->deskripsi_fasilitashtl}}</span>
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
