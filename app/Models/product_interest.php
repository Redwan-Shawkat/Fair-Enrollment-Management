<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_interest extends Model
{
    protected $table = 'product_interest';

    protected $fillable = [
        'id',
        'companyid',
        'name',
        'active_status',
    ];


    public function getActiveTextAttribute(){
        return match($this->active_status){
            0=>'Inactive',
            1=>'Active',
            default=>'Active'
        };
    }
}
