<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class studentsController extends Controller
{
    function students(){
        $func = new \App\Models\students();
        echo $func->dummy();
        $students =  students::all();


        // Acha ye jo comment howa wa code he ye Eloquent Model :: querybuilder is code
        // Me ye dono use howe Eloquent Model database ko models se handle krna or query
        // builder get where order by inko easy krna 

        // $students = students::where('Name', 'Abdul Rafay')->get();

        // $students = students::find(2);
        // $students = [$students];

        // $students = students::insert([
        //     "Name" => "Insert Name",
        //     "Email" => "Insert Email"
        // ]);

        // $students = students::Where("Name", "Abdul Rafay")->update([
        //     "Name" => "Update Name",
        //     "Email" => "Update Email"
        // ]);

        // $students = students::find(4)->delete();
        
        
        return view('EloqentModel.students', ["students" => $students]);
    }
}
