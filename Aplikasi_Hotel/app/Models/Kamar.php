<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Kamar extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $table = 'kamars';

    public $fillable = [
      'nama_kamar',
      'foto_kamar',
      'jum_kamar',
      'ketersediaan',
      'harga_kamar',
      'deskripsi_kamar',
      'fasilitaskmrs_id',
    ];

    public function fasilitas(): BelongsToMany
    {
        return $this->belongsToMany(
            Fasilitaskmr::class,
            'detail_kamars',
            'kamar_id',
            'fasilitaskmr_id'
        );
    }
    public function reservasi()
    {
        return $this->hasMany('App\Models\Pemesanan');
    }

    public function kamarReservasi()
    {
        return $this->hasMany('App\Models\Kamar');
    }
}
