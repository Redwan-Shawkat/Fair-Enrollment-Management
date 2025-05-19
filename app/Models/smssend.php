<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class smssend extends Model
{
    protected $table = 'smssend';
    protected $fillable = [
        'smssendid',
        'tovisitorid',
        'message',
        'sendtime',
        'smstype'
    ];
}
