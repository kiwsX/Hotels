<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitashtl extends Model
{
    use HasFactory;
    public $fillable = [
        'nama_fasilitashtl',
        'foto_fasilitashtl',
        'deskripsi_fasilitashtl',
        ];
}
