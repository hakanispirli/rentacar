<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampanyalar extends Model
{
    use HasFactory;

    protected $fillable = [
        'kampanya_baslik',
        'kampanya_aciklama',
        'kampanya_gorsel',
    ];
}
