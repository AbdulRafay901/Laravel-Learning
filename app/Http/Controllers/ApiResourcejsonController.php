<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\students;
use App\Http\Resources\StudentResource;

class ApiResourcejsonController extends Controller
{
    function json(){
        
        $students = students::all();

        return StudentResource::collection($students);

        // return view('ApiResource.json', ['data' => $students]);
    }
    
}
