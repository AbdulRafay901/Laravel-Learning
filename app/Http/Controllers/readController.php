<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;

class readController extends Controller
{
    function Read(){
        $data = insert::paginate(4);

        return view('LaravelDatabase.read', ['data' => $data]);
    }
}
