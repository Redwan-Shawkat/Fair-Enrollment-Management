<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{

    protected $table = 'visitor';
    protected $primaryKey = 'visitorid';

    protected $fillable = [
        'visitorid',
        'companyid',
        'visitorname',
        'mobileno',
        'email',
        'gender',
        'visitorcompany',
        'thoughts',
        // 'iswinner',
        // 'issmssend',
        // 'drawid',
        // 'havetakenprize',
        // 'winpos',
        // 'prom_offerOid',
        // 'is_redeem',
        // 'profession_id',
        // 'product_interest_id', //Foreign Key maybe
        // 'coupon_code's
    ];

    //For Numeric Gender Value
    // Method: getGenderTextAttribute || Accessible as: gender_text (snake_case)
    public function getGenderTextAttribute(){
        return match($this->gender){
            1=>'Male',
            2=>'Female',
            0=>'Other',
            default=>'Male'
        };
    }
}
