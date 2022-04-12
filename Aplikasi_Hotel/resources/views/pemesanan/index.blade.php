@extends('layout.admin',['title'=>'Pemesanan'])

@section('content-header')
    <h1 class="m-0"><i class="fas fa-receipt"></i>Pemesanan</h1>
@endsection

@section('content')
    <x-status/>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <x-search />
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Jumlah Kamar</th>
                    <th scope="col">Status</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->no_telp}}</td>
                        <td>{{$row->tgl_check_in}}</td>
                        <td>{{$row->tgl_check_out}}</td>
                        <td>{{$row->kamars->nama_kamar}}</td>
                        <td>{{$row->jumlah_kamar}}</td>
                        <td>{{$row->status}}</td>
                        <td>{{$row->total_harga}}</td>
                        <td>
                            <x-btn-delete :link="route('pemesanan.destroy',['pemesanan'=>$row->id])"/>
                        </td>
                    </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('modal')
    <x-modal-delete/>
@endsection

