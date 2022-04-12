@extends('layout.admin',['title'=>'Edit Fasilitas Kamar'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-door-open"></i>Fasilitas Kamar</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-edit :action="route('fasilitaskmr.update',['fasilitaskmr'=>$row->id])" upload="true">
                <x-input label="Nama Fasilitas Kamar" name="nama_fasilitaskmr" :value="$row->nama_fasilitaskmr"/>
            </x-form-edit>
        </div>
    </div>
@endsection
