<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailKamar extends Model
{
    use HasFactory;

    protected $fillable = [
       'kamar_id',
       'fasilitaskmr_id',
    ];
}
