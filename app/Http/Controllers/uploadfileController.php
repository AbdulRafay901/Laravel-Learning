<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadfileController extends Controller
{
    function filefunc(Request $request){

    // Acha ye StoreAS se ham Upload hoi image ka name apni mrzi se rkh skhte hen
    // Or explode path ko tor deta he or array me convert krdeta he

      $path = $request->file('file')->storeAs('public', "Dummy1.png");
      $fileNameArray = explode("/",$path);
      $filename = $fileNameArray[1];

     

      return view('UploadFile.display', ["path" => $filename]);

    }
}
