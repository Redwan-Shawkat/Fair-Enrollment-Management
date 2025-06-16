<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table = 'promotional_offer';
    protected $fillable = [
        // 'prom_offer_id',
        'prom_offer_name',
        'validate_from',
        'validate_to',
        'is_active',
        'logo'
    ];

    public function getActiveTextAttribute(){
    return match($this->is_active){
            0=>'Inactive',
            1=>'Active',
            default=>'Inactive'
        };
}
