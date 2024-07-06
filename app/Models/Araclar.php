<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Araclar extends Model
{
    use HasFactory;

    protected $table = 'araclars';

    protected $fillable = [
        'arac_adi',
        'arac_vites',
        'arac_yakit',
        'arac_depozito',
        'arac_kapasite',
        'arac_yas_siniri',
        'arac_km_limiti',
        'arac_sinif',
        'arac_marka',
        'arac_plaka',
        'arac_fiyat',
        'arac_gorsel',
        'arac_durum',
    ];

    public function rezervasyonlar()
    {
        return $this->hasMany(Rezervasyonlar::class, 'arac_id');
    }
}
