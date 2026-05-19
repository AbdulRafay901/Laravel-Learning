<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bindings;

class bindingController extends Controller
{
    //
    function binding(bindings $key){
        return view('Route-Model-Binding.binding', ["data" => $key]);
    }
}
