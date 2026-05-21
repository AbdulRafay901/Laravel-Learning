<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;

class readController extends Controller
{
    function Read(){

    // Acha Ab ye select isliye use hota he jaab hamhe database se sirf kaam ke 
    // ke columns mangwane ho faltu nhi is se speed increase hoti he 

        $data = insert::select('id', 'Name', 'Email')->paginate(2);

        return view('LaravelDatabase.read', ['data' => $data]);
    }
}
