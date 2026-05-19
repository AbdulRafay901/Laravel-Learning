<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apis;
use Illuminate\Support\Facades\Validator;

class apiController extends Controller
{
    //
    function GET(){
        return apis::all();
    }

    function POST(Request $request){

    // Yaha Hame Api se aya data validate bhi krskhte he jese neche kara he hamne 

        $rules = array(
            'Name'  => 'required'
        );
        $validation = Validator::make($request->all(), $rules);

        if($validation->fails()){
            return $validation->errors();
        }else{
        $apis = new apis();
        $apis->Name = $request->Name;
        $apis->Email = $request->Email;
        $apis->Number = $request->Number;
        if($apis->save()){
            return ["result" => "Add"];
        }else{
            return ["result" => "Faild"];
        }
         }
    }

    function PUT(Request $request){
        $id = apis::find($request->id);

        $id->Name = $request->Name;
        $id->Email = $request->Email;
        $id->Number = $request->Number;
        if($id->save()){
            return ["result" => "User Update Successfully"];
        }else{
            return ["result" => "User Update Failed"];
        }
        
    }

    function Delete(Request $request){
       return apis::destroy($request->id);
    }
}
