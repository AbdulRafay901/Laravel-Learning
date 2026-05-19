<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupController extends Controller
{
    function dashboard(){
        return "Dashboard Page";
    }
    function users(){
        return "User Page";
    }
    function orders(){
        return "Orders Page";
    }
    function usersid($id){
        return "User Id is : ".$id;
    }
}
