<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class insert extends Model
{
    protected $table = 'insert';
    public $timestamps = false;

    // Accessors in Laravel       Start

    // Acha Ab ye getNameAttribute Kiya krta he Ye Database se aya data ka Name Ka Ka 
    // First Letter Uppercase Kdeta he isko bolte Accessors Mltb database se aya data
    // Modify Krna                 

    function getNameAttribute($val){
        return ucfirst($val);
    }

    // Accessors in Laravel       End
}
