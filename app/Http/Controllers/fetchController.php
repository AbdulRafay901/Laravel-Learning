<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class fetchController extends Controller
{
    public function fetch()
    {
        try {

            $users =  DB::select('SELECT * FROM users');

            return view('database.fetch', compact('users'));

        } catch (\Exception $e) {
            Log::error($e->getMessage());

            // Acha ye log error isliye use hota he jaab bhi koi error aye wo
            // storage\log\laravel.log file me save hojaye
            // Mtlb ham sorahe hon or website me koi error ajaye to wo
            // is file me save hojayega ham utha kr check krenge to pata chal jayega
        }

    }
}
