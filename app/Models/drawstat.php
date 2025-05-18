<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class drawstat extends Model
{
    protected $table = 'drawstat';
    protected $fillable = [
        'drawid',
        'lastid',
        'drawtime'
    ];
}
