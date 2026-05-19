<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    function student(){
        return $this->belongsToMany('App\Models\student', 'courses_student', 'course_id','student_id');
    }
}
