<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    // Ab ye dekho Query Builder Ka kaam he Hamare Query Ko Short krna Jese hamhe Where krna he
// Order by Desc krna he ya phr kesi name se data lana he to ham is tareeke se query
// Chalate hen Isko bolte hen Query Builder
    function querybuilder(){
        $data = DB::table('students')->get();
        // $data = DB::table('students')->where('Name', 'Abdul Rafay')->get();
        // $data = DB::table('students')->first();
        // $data = [$data];
        return view('querybuilder.query', ['users' => $data]);

        // Acha Ye jo Code Green Mark howa he ye Hamne Querybuilder style me Insert kara he
        // Isko Comment krke Check krskhte hen    Data Insert    Start

        // $data = DB::table('students')->insert(
        //     [
        //         "Name" => "Hasnain",
        //         "Email" => "Hasnain Shaikh"
        //     ]
        // );

        // Acha Ye jo Code Green Mark howa he ye Hamne Querybuilder style me Insert kara he
        // Isko Comment krke Check krskhte hen    Data Insert    End

        // Data Update Kara he Query Builder Style me      Start

        // $data = DB::table('students')->where('id', 1)->update(
        //     [
        //         "Name" => "Change",
        //         "Email" => "Change@gmail.com"
        //     ]

        //     );

        //     if($data){
        //         return "Data Updated Successfully";
        //     }else{
        //         return "Data Update Failed";
        //     }
            // Data Update Kara he Query Builder Style me      End



        //    Query Builder Style Data Delete Krna database se    Start

               $data = DB::table("students")->where("id", 1)->delete();
               
        //    Query Builder Style Data Delete Krna database se    End
    }

    
}

