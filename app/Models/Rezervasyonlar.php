<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervasyonlar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'arac_id',
        'alis_tarihi',
        'alis_saati',
        'teslim_tarihi',
        'teslim_saati',
        'rezervasyon_durum',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function arac()
    {
        return $this->belongsTo(Araclar::class, 'arac_id');
    }
}
