<?php

namespace App\Services;

class DependencyClass
{
    public function dependency()
    {
        return "Dependency Funtion Working";
    }

    public function ServiceContainer($name)
    {
        return "This is " . $name;
    }

}
