<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stubController extends Controller
{
    //
    function index(Request $request){
        return "Stub controller.plain.stub Customize";
    }
}
