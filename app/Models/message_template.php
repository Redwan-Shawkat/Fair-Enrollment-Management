<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class message_template extends Model
{
    protected $table = 'messagetemplate';
    protected $fillable = [
        'msgid',
        'message'
    ];
}
