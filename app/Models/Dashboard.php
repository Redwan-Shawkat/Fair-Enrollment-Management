<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    protected $table = 'companyinfo';
    protected $fillable = [
        'id',
        'name',
        'address',
        'isactive',
        'input_field_ids'
    ];
}
