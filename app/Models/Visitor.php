<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{

    protected $table = 'visitor';
    protected $fillable = [
        'id',
        'name',
        'mobile',
        'email',
        'gender',
        'visitorcomapny',
        'thoughts',
        'iswinner',
        'issmssend',
        'drawid',
        'havetakenprize',
        'winpos',
        'prom_offerOid',
        'is_redeem',
        'profession_id',
        'product_interest_id', //Foreign Key maybe
        'coupon_code'
    ];
}
