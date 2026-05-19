<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    function dummy(){
        return "This is dummy function";
    }

    public $timestamps = false;
}
