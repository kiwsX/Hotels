@extends('layout.admin',['title'=>'Edit Kamar'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-edit :action="route('kamar.update',['kamar'=>$row->id])" upload="true">
                <x-input label="Nama Kamar / Tipe Kamar" name="nama_kamar" :value="$row->nama_kamar"/>
                <input type="hidden" name="oldImage" value="{{ $row->foto_kamar }}">
                @if($row->foto_kamar)
                    <img src="{{ asset('storage/' . $row->foto_kamar) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
                @else
                    <img class="img-preview img-fluid">
                @endif
                <input name="file_kamar" id="image" class="form-control input-custom" type="file" onchange="previewImage()">
                <x-input label="Jumlah" name="jum_kamar" type="number" :value="$row->jum_kamar"/>
                <x-input label="Kamar Tersedia" name="ketersediaan" type="number" :value="$row->ketersediaan"/>
                <x-input label="Harga" name="harga_kamar" type="number" :value="$row->harga_kamar"/>
                <label>Fasilitas Kamar</label>
                <div class="flex-row">
                    @php
                    $fasilitasKamarSekarang = $row->fasilitas()->get();
                    @endphp

                    @foreach($fasilitas as $f)
                        @php
                        $checked = $fasilitasKamarSekarang->contains($f->id) ? 'checked' : '';
                        @endphp

                        <input type="checkbox" name="nama_fasilitas[]" value="{{$f->id}}" {{ $checked }}> <span>{{$f->nama_fasilitaskmr}}</span>
                    @endforeach
                </div>
                <x-textarea label="Deskripsi" name="deskripsi_kamar" :value="$row->deskripsi_kamar"/>
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
