<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sms_content extends Model
{
    protected $table = 'sms_content';
    protected $fillable = [
        'sms_content_id',
        'prom_offer_id',
        'sms_content',
    ];
}
