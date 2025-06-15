<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'companyinfo';

     protected $fillable = [
      //   'id',
        'name',
        'address',
        'logo',
        'isactive',
        'input_field_ids'
     ];

     public function getActiveTextAttribute(){
         return match($this->isactive){
            '0' => 'Inactive',
            '1' => 'Active',
            default => 'Inactive'
         };
     }
}
