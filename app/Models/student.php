<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{

    protected $table="student";

    function courses(){
        return $this->belongsToMany('App\Models\courses', 'courses_student', 'student_id', 'course_id');
    }
}
