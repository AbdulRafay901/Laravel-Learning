<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fetchController extends Controller
{
    public function fetch(){
        $users =  DB::select('SELECT * FROM users');
        return view('database.fetch', compact('users'));
        
    }
}
