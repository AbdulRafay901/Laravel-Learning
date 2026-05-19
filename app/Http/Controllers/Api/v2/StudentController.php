<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    //
    function V2(){
        
        $students = students::all();

        return StudentResource::collection($students);
    }
}
