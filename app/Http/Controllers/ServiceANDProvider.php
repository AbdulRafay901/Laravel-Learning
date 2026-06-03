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
        return $dependencyClass->dependency();
    }

    // Dependency Method --------------- End


    // Service Container ----------------------- Start

    // Ab dekho Mujhe kiya krna he Jaab ye ServiceContainer() call hoto DependencyClass wala
    // Function chalana he Ye  kaam easy ham aese kr skhte  hen jese iuper depency function me
    // Howa he Or ye kaam Service Container  Khud Resolve krdeta he
    // Leken ab Ham khud Khud samjhenge ye kaam mltb class ka object Service Container
    // Behind the seen kese banata he  mltb Service Container kaam kese krta he ab ham
    // Ye samjhenge

    public function ServiceContainer()
    {
        $Class = app('ServiceContainerLearn');

        return $Class->ServiceContainer("Service Container lolo");
    }

    //Service Container ----------------------- End



}
