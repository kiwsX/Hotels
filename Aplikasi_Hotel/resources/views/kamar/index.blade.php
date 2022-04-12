@extends('layout.admin',['title'=>'Kamar'])

@section('content-header')
    <h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
    <x-status/>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <x-btn-create :link="route('kamar.create')"/>
                </div>
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
                    <th>No.</th>
                    <th>Nama Kamar</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Kamar Tersedia</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Fasilitas Kamar</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ucwords($row->nama_kamar)}}</td>
                        <td>Rp. {{number_format($row->harga_kamar,2,',','.')}}</td>
                        <td>{{$row->jum_kamar}}</td>
                        <td>{{$row->ketersediaan}}</td>
                        <td><img src="{{asset('storage/' . $row->foto_kamar)}}" width="50%"></td>
                        <td>{{$row->deskripsi_kamar}}</td>
                        <td>
                            @foreach($row->fasilitas()->get() as $f)
                                {{ $f->nama_fasilitaskmr }}
                            @endforeach
                        </td>
                        <td>
                            <x-btn-edit :link="route('kamar.edit',['kamar'=>$row->id])"/>
                            <x-btn-delete :link="route('kamar.destroy',['kamar'=>$row->id])"/>
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

