<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\products;
class sellers extends Model
{

// Acha Ye one to one relationship ka code he --------------------- Start

    function products(){
        return $this->hasOne('App\Models\products', 'seller_id');
    }

// Acha Ye one to one relationship ka code he --------------------- End   

// Acha Ye one to Many relationship ka code he --------------------- Star

    function productsMany(){
        return $this->hasMany(products::class, 'Seller_id');
    }
// Acha Ye one to Many relationship ka code he --------------------- End
}
