<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class inlineBladeController extends Controller
{
    // Acha Ab inline Blade Template Isliye use hota he Jaab hamhe Kuch aik Line ki 
// Html likhni ho new page me Ab aik Line ki Html likhne ke liye 
// New view file to nhi banane ge isliye yaha use  hota he inline blade template
// Ye kiya krta  he jaab ham controller chalne ke baad kuch aik line ki
// html show krni he hoti he waha ham use Krte hen use Illuminate\Support\Facades\Blade;
// return Blade::render('<h1>{{$Total}} Products</h1>', ['Total' => $total]);
// is se aik line ki html bhi likhdi hamhe or new file bhi nhi bani 
    
    function productList(){
        $total = 50;
        return Blade::render('<h1>{{$Total}} Products</h1>', ['Total' => $total]);
    }
}
