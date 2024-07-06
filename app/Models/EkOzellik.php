<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkOzellik extends Model
{
    use HasFactory;

    protected $fillable = [
        'mini_paket',
        'orta_paket',
        'tam_paket',
        'genc_surucu',
        'ek_surucu',
        'cocuk_koltugu',
    ];
}
