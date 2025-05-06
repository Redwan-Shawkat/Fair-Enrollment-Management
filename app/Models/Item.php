<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    Schema::create('items',function(Buletprint $table){
        $table->id();
        $table->string('title');
        $table->timestamps();
    })
}
