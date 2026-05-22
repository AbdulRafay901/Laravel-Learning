<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insert;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    //
    function Transaction(){
        DB::beginTransaction();

        try {

            insert::insert([
                "Name" => "Check",
                "Email" => "Check@gmail.com",
                "Number" => "83333347"
            ]);

            insert::insert([
                "Name" => "Transaction",
                "Email" => "Transaction@email.com",
                "Number" => "000000000676"
            ]);

            DB::commit();

            return "Ok he";
            
        } catch (\Exception $e) {
           DB::rollback();

           return $e->getMessage();
        }
    }
}
