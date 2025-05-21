<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userInfo extends Model
{
    protected $table = 'webuserinfo';
    protected $fillable = [
        'webuserid',
        'companyid',
        'fullname',
        'email',
        'password',
        'contactno',
        'dateofbirth',
        'gender',
        'smspin',
        'smspinstatus',
        'profileimage',
        'isactive',
        'isactivetime',
        'lastloginaddress',
        'port',
        'usertype',
        'forgottenpasswordtoken',
        'created_at',
    ];
}
