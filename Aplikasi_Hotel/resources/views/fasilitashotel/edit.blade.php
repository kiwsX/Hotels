@extends('layout.admin',['title'=>'Edit Fasilitas Hotel'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-building"></i>Fasilitas Hotel</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-edit :action="route('fasilitashtl.update',['fasilitashtl'=>$row->id])" upload="true">
                <x-input label="Nama Fasilitas Hotel" name="nama_fasilitashtl" :value="$row->nama_fasilitashtl"/>
                <input type="hidden" name="oldImage" value="{{ $row->foto_fasilitashtl }}">
                @if($row->foto_fasilitashtl)
                    <img src="{{ asset('storage/' . $row->foto_fasilitashtl) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
                @else
                    <img class="img-preview img-fluid">
                @endif
                <input name="foto_fasilitashtl" id="image" class="form-control input-custom" type="file" onchange="previewImage()">
                <x-textarea label="Deskripsi" name="deskripsi_fasilitashtl" :value="$row->deskripsi_fasilitashtl"/>
            </x-form-edit>
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
