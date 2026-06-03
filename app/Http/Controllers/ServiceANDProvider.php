<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DependencyClass;

class ServiceANDProvider extends Controller
{
    // Dependency Method --------------- Start

    //Acha Ab ye  hota he DependencyClass mltb Aik class Dusri Par Dependent he
    // Jaab hamhe Aik class ko dusri class me Use krna hota heto is tareeka se use hota
    // Clean or iska use hota he ServiceContainer ki waja  se jo background me chal raha hota
    // He hamhe nazar nhi ata he

    public function chalo(DependencyClass $dependencyClass)
    {
        return $dependencyClass->check();
    }

    // Dependency Method --------------- End

}
