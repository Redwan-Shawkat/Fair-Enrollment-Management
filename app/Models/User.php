<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// class userInfo extends Model
class user extends Authenticatable
{

    use Notifiable;

    protected $table = 'webuserinfo';
    protected $fillable = [
        'webuserid',
        'companyid',
        'name',
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

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $primaryKey = 'webuserid';
}
