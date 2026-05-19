<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class methodController extends Controller
{
    function get(){
        return "Get method";
    }
    function post(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
    }
    function put(){
        return "Put Method";
    }
    function delete(){
        return "delete Method";
    }
    function any(){
        return "Any Method";
    }
    function group1(){
        return "Match method Group 1";
    }
    function group2(){
        return "Match method Group 2";
    }
}
