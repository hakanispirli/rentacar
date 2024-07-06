<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_email',
        'site_phone',
        'site_whatsapp',
        'site_address',
        'site_instagram',
        'site_facebook',
        'site_twitter',
    ];
}


/* form-control class'ı ile stil uyumunu sağlamak için */

input[type="tel"] {
    height: 54px;
    border-radius: 8px;
    color: #3D565F;
    border: 1px solid #000000;
    padding: 18px 20px;
    background-color: #ffffff;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    z-index: 1;
}

.iti {
    width: 100% !important;
}

.iti__flag-container {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}

.iti__selected-flag {
    padding-top: -15px !important;
    height: 53px !important;
    border-radius: 8px 0 0 8px !important;
    background-color: #F6F6F6 !important;
    border: 2px solid #F6F6F6 !important;
}

.iti--allow-dropdown .iti__selected-flag {
    border-right: 0 !important;
}
