@extends('layout.tamu',['title'=>'Pesan'])

@section('content')
    <section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-light text-uppercase">Book Now <span class="d-block mt-2">Make a Reservation</span></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <form action="/pesan/sendata" method="POST">
            <input type="hidden" name="_token" value="tHf8DkCOhjW027e7i3xQfRngbKS3o8mR7jRS4BZb">
            <div class="row mt-5 mb-5">
                <div class="col-lg-4">

                    <section class="section section-tertiary section-no-border p-5 mt-1 mb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 150}}">
                        <div class="form-row">
                            <div class="form-group col">
                                <h4 class="mt-4 mb-4 pb-0 text-uppercase">Reservation Details</h4>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="form-control-custom form-control-datepicker-custom">
                                    <input type="date" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Check-In" name="checkin" id="bookNowArrival" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="form-control-custom form-control-datepicker-custom">
                                    <input type="date" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Check-Out" name="checkout" id="bookNowDeparture" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="form-control-custom">
                                    <input type="text" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Number of Room" name="jumlah_kamar" id="jumlah_kamar" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="form-control-custom">
                                    <select class="form-control text-uppercase text-2" name="jumlah_orang" data-msg-required="This field is required." id="jumlah_orang" required>
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-lg-8">

                    <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-4 mb-4 pb-0 text-uppercase">Select Your Room</h4>
                            </div>
                        </div>
                        @foreach($kamar as $list)
                            @if(!$list->ketersediaan <= 0)
                        <div class="row">
                            <div class="col-1 text-center">
                                <label class="mt-4 mb-4">
                                    <input type="radio" checked="checked" name="id_kamar" id="bookNowRoom" value="{{$list->id}}" {{$list->id == true ? "selected" : ""}}>
                                </label>
                            </div>
                            <div class="col-2 d-none d-sm-block">
                                <img src="{{url('storage/' . $list->foto_kamar)}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-11 col-sm-9">
                                <h5 class="mt-0 mb-0">{{$list->nama_kamar}}</h5>
                                <div class="room-suite-info">
                                    <ul>
                                        <li><label>Room Available</label>	<span>{{$list->ketersediaan}} room</span></li>
                                        <li><label>RATES FROM</label> <strong>Rp. {{number_format($list->harga_kamar,0,'','.')}},00 / night</strong></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                    </section>
                    <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                        <div class="row">
                            <div class="col">
                                <h4 class="mt-4 mb-4 pb-0 text-uppercase">Form Details</h4>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="bookNowFullName" class="form-control-label">Full Name Guest</label>
                                <input type="text" class="form-control" id="bookNowFullName" name="nama" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="bookNowStreetAdd1" class="form-control-label">NIK</label>
                                <input type="number" class="form-control" id="bookNowStreetAdd1" name="nik" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="form-control-label">Phone Number</label>
                                <input type="number" class="form-control" id="bookNowStreetAdd2" name="no_telp" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control" id="bookNowStreetAdd2" name="email" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="form-control-label">Address</label>
                                <input type="text" class="form-control" id="bookNowCity" name="alamat" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="form-control-label">Note</label>
                                <input type="text" class="form-control" id="bookNowZip" name="catatan" placeholder="">
                            </div>
                        </div>

                    </section>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Book Now" class="btn btn-primary btn-lg btn-block text-uppercase p-4 mb-4">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="pb-4 text-2">
                                * make sure your personal data is correct so that no reservation becomes easier.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection
