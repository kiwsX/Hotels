@extends('layout.admin',['title'=>'Fasilitas Kamar'])

@section('content-header')
    <h1 class="m-0"><i class="fas fa-door-open"></i>Fasilitas Kamar</h1>
@endsection

@section('content')
    <x-status/>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <x-btn-create :link="route('fasilitaskmr.create')"/>
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
                    <th>Aksi</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{($row->nama_fasilitaskmr)}}</td>
                        <td>
                            <x-btn-edit :link="route('fasilitaskmr.edit',['fasilitaskmr'=>$row->id])"/>
                            <x-btn-delete :link="route('fasilitaskmr.destroy',['fasilitaskmr'=>$row->id])"/>
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

