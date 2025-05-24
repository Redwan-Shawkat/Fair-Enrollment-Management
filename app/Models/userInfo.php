<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//
use Illuminate\Contracts\Auth\CanResetPassword;

// class userInfo extends Model
class userInfo extends Authenticatable implements CanResetPassword
{

    use Notifiable;

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

    protected $hidden = [
        'password', 'remember_token','forgottenpasswordtoken',
    ];

    protected $primaryKey = 'webuserid';

    /* PASSWORD RESET */

    // Selecting the exact email
    public function getEmailForPasswordReset(){
        return $this->email;
    }

    // Send Password Reset Notification
    // public function sendPasswordResetNotification($token){
        // Storing token in the desired table
        // $this->update(['forgottenpasswordtoken' => $token]);
        // Sending notification
        // $this->notify(new \Illuminate\Auth\Notifications\ResetPassword($token));
    // }


}
