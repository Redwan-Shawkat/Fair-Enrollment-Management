<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table = 'promotional_offer';
    protected $fillable = [
        'prom_offer_id',
        'prom_offer_name',
        'validate_from',
        'validate_to',
        'is_active',
        'logo'
    ];
}
