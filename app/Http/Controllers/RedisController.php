<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //Acha Ab YE redis Kya he Redis isliye  use hota he jaab koi data bar bar aye
    // To ham use krte hen redis bss Redis or Cache ka syntex same hota he 
    // Bss env me se ye change hota he CACHE_STORE=redis baki data lene ka syntex
    // Same hota he bs redis download krke install krna parta he 
    // Or cache ki file path lena prta he 
    function Redis(Request $request){
        
        $redis = Cache::remember('users', now()->addMinutes(30), function(){
             return insert::all();
        });

        return view('Redis.index', ['Redis' => $redis]);

    }
}
