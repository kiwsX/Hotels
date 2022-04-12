@extends('layout.admin',['title'=>'Tambah Kamar'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-bed"></i> Kamar</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-create :action="route('kamar.store')" upload="true">
                <x-input label="Nama Kamar / Tipe Kamar" name="nama_kamar"/>
                <img class="img-preview img-fluid">
                <x-input label="Foto" name="file_kamar" type="file" id="image" onChange="previewImage()"/>
                <x-input label="Jumlah" name="jumlah_kamar" type="number"/>
                <x-input label="Kamar Tersedia" name="ketersediaan" type="number"/>
                <x-input label="Harga" name="harga_kamar" type="number"/>
                <label>Fasilitas Kamar</label>
                <div class="flex-row">
                @foreach($fasilitas as $f)
                    <input type="checkbox" name="nama_fasilitas[]" value="{{$f->id}}"> <span>{{$f->nama_fasilitaskmr}}</span>
                @endforeach
                </div>
                <x-textarea label="Deskripsi" name="deskripsi"/>
            </x-form-create>
            </form>
        </div>
    </div>
@endsection
