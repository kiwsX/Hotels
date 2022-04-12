<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitaskmr extends Model
{
    use HasFactory;

    public $table = 'fasilitaskmrs';

    public $fillable = [
        'nama_fasilitakmr',
    ];
}
