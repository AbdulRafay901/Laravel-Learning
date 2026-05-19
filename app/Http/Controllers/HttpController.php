<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller

//  Acha Ye Http Client Side Rendring hoti he or Is hame Api call Krskhte he 
{
    function http(){
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('Http.api', ["data" => json_decode($response)]);
    }
}
