<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profession extends Model
{
    protected $table = 'professions';
    protected $fillable = [
        // 'id',
        'name',
        'active_Status'
    ];

    public function getActiveTextAttribute(){
        return match($this->active_status){
            0=>'Inactive',
            1=>'Active',
            default=>'Inactive'
        };
    }
}
