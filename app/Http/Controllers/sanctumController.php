<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

    class sanctumController extends Controller
    {
        function login(Request $request){

        // Acha Api login with sanctum he user api se ata he check krte hen ham
        // Exits krta he ya nhi agar krta heto Login hone do or token bana lo 


           $user = User::where('Email', $request->Email)->first();
        if(!$user || Hash::check($request->Password, $user->Password)){
            return ["Result" => "User Not Found"];
        }

          $success['token'] = $user->createToken('Sanctum')->plainTextToken;
          $success['name'] = $user->Name;

          return ["result" => $success, "Msg" => "User Login Successfully"];
           
        }

        function signup(Request $request){

        // Acha Api signup with Sanctum jaab bhi Api se user ata he register krne
        // Uska data liya hamne password crypt kra phr is data ko hamne table me daldiya he
        // Table koi si ho leken authentication ke liye User he use hogi or koi nhi 
        // Thk hena Phr phe hamne jo user insert kara he iuske liye aik createToken('TokenName')
        // Bana diya he ab ye token Middleware me check hoga mltb bar bar login krne ki zaroort
        // Nhi he user ko aik bar login phr iusko token mil gaya  bss wo ayega iuska token
        // Front-end se ayega middleware me check hoga token aye verify howa agar sai 
        // Website access krne do 
          $inputs = $request->all();
           $inputs['Password'] = bcrypt($inputs['Password']);
           $insert = User::create($inputs);
           $success["token"] = $insert->createToken('Sanctum')->plainTextToken;
           return ["success" => true, "result" => $success, "Msg" => "User Register Succesfully"];
            
        }
    }
