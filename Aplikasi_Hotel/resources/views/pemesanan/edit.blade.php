@extends('layout.admin',['title'=>'Edit Pemesanan'])

@section('content-header')
    <h1 class="m-0"> <i class="fas fa-receipt"></i>Pemesanan</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <x-form-create :action="route('pemesanan.update')" upload="true">
                <p class="mb-2 text-bold">Tanggal CheckIn</p>
                <input label="Tanggal CheckIn" name="tanggal_checkin" type="date" class="form-control mb-2"/>
                <p class="mb-2 text-bold">Tanggal CheckOut</p>
                <input name="tanggal_checkout" type="date" class="form-control mb-2"/>
                <x-input label="Jumlah Kamar Pesan" name="jumlah_kamarpesan" type="number"/>
                <x-input label="Nama Pemesan" name="nama_pemesan"/>
                <x-input label="Email Pemesan" type="email" name="email_pemesan"/>
                <x-input label="Nomor Telpon" type="number" name="no_hp"/>
                <x-input label="Nama Tamu" name="nama_tamu"/>
                <p class="mb-2 text-bold">Status Pemesanan</p>
                <select name="status_pemesanan" class="form-control mb-2">
                    <option value="">-- Pilih Status Pemesanan --</option>
                    <option value="1">Checkin</option>
                    <option value="2">Checkout</option>
                    <option value="3">Cancel</option>
                </select>
                <p class="mb-2 text-bold">Tanggal Pesan</p>
                <input type="datetime-local" name="tanggal_pesan" class="form-control">
            </x-form-create>
        </div>
    </div>
@endsection
