<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    public $fillable = [
        'id_kamar',
        'jumlah_kamar',
        'jumlah_orang',
        'email',
        'no_telp',
        'nik',
        'nama',
        'alamat',
        'tgl_check_in',
        'tgl_check_out',
        'status',
        'catatan',
        'total_harga',
    ];
    public function kamars(){
        return $this->belongsTo('App\Models\Kamar', 'id_kamar');
    }
}
