<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;
use Illuminate\Support\Facades\Cache;

class readController extends Controller
{
    function Read(){

    // Acha Ab ye select isliye use hota he jaab hamhe database se sirf kaam ke 
    // ke columns mangwane ho faltu nhi is se speed increase hoti he 
    // Acha ye Cache isliye use hota Jaab example hamne database se data fetch krna he
    // Bar Bar to ham bar bar database me nhi jayenge Ham use krenge cache 
    // Ab kya hota he cache kya krta he database lekar data apne pass save krleta he
    // thk hena ab jaab bhi bar  bar data ayega to cache se ayega database se nhi 
    // Ye optimization ke lye use hota he  ye  neche iska pura code he
    // Agar data cache me hoga to cache se  ayega wrna pehle database se ayega cache
    // me save hoga phr Cache se ayega or ham time bhi laga dete hen jes hamne neche lagaya he 
    // addMintues(30)  mltb 30 minutes me cache expire hoga database se fresh data ayega 
    // or delete update ya insert par Cache::forget('sellers') lgta he 
    // take delete hoto cache forget ho or wapis fresh data cache me save hojaye 

        $data = Cache::remember('sellers', now()->addMinutes(30), function(){
            return insert::select('id', 'Name', 'Email')->get();
        });

        return view('LaravelDatabase.read', ['data' => $data]);
    }
}
