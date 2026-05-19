<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
    

    function V1(){
        $students = students::all();

        return view('ApiVersioning.index', ['students' => $students]);
    }
    
}
