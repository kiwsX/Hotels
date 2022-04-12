@extends('layout.admin',['title'=>'Fasilitas Hotel'])

@section('content-header')
    <h1 class="m-0"><i class="fas fa-building"></i>Fasilitas Hotel</h1>
@endsection

@section('content')
    <x-status/>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <x-btn-create :link="route('fasilitashtl.create')"/>
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
                    <th>Nama Fasilitas</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ucwords($row->nama_fasilitashtl)}}</td>
                                        <td><img src="{{asset('storage/' . $row->foto_fasilitashtl)}}" width="50%"></td>
                                        <td>{{$row->deskripsi_fasilitashtl}}</td>
                                        <td>
                                            <x-btn-edit :link="route('fasilitashtl.edit',['fasilitashtl'=>$row->id])"/>
                                            <x-btn-delete :link="route('fasilitashtl.destroy',['fasilitashtl'=>$row->id])"/>
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

