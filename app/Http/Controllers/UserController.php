<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        return view('user');
    }
    function aboutUser(){
        return "I Am a Web Developer";
    }

    // Jaab ye function chale to view me userid page dikhao or jo id route 
    // url se ayi he ius id ko userid page par behj do 
    // iuper hamne view file ka path liya he or yaha view::exist me check
    // kar rahe hen agar ye file view me heto load krdo wrna else chala do
    function getUserName($id){
        if(view::exists('userid')){
           return view('userid', ['id' => $id]);
        }else{
            echo "Page Not Found";
        }
    }
}
