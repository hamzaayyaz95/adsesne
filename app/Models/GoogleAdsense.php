<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleAdsense extends Model
{
    use HasFactory;

    protected $fillable = [
        'adsense_type',
        'script_code',
        'status',
    ];
}