@extends('layout.admin',['title'=>'Tambah Fasilitas Kamar'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-door-open"></i>Fasilitas Kamar</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-create :action="route('fasilitaskmr.store')" upload="true">
                <x-input label="Nama Fasilitas Kamar" name="nama_fasilitaskmr"/>
            </x-form-create>
        </div>
    </div>
@endsection
