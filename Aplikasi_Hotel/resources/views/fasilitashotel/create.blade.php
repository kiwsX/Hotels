@extends('layout.admin',['title'=>'Tambah Fasilitas Hotel'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-building"></i>Fasilitas Hotel</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-create :action="route('fasilitashtl.store')" upload="true">
                <x-input label="Nama Fasilitas Hotel" name="nama_fasilitashtl"/>
                    <img class="img-preview img-fluid">
                <input name="foto_fasilitashtl" id="image" class="form-control input-custom" type="file" onchange="previewImage()">
                <x-textarea label="Deskripsi" name="deskripsi_fasilitashtl"/>
            </x-form-create>
        </div>
    </div>
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oRFEvent){
                imagePreview.src = oRFEvent.target.result;
            }
        }
    </script>
@endsection
