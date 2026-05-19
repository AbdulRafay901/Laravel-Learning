<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class products extends Model
{
    function manytoone(){
        return $this->belongsTo('App\Models\sellers', 'Seller_id');
    }
}
