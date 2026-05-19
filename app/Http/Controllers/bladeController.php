<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{

    function blade(){
        $name = "Rafay";
        $array = ['Paji', 'jaja'];
        return view('blade-template.home', ["Name" => $name, "Array" =>  $array]);
    }
}
