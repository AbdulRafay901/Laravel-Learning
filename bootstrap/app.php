<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\countryCheck;
use App\Http\Middleware\lang;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

    // Localilization Language Change Middleware    Start
        $middleware->appendToGroup('lang', lang::class);
    // Localilization Language Change Middleware    End

    // Acha ye jo green howa wa Code he ye Ye global middleware he mtlb ye middleware 
    // Har route par applay hogi 

        // $middleware->append(ageCheck::class);

        // Acha ye jo Middleware he ye ye group middleware he ab hamhe 2 middle ware ko 
        // Aik group me rkhdiya he ab jis  bhi route par hamhe middleware apply krni he
        // iudher group ka name krdo web.php me iska code he 

        $middleware->appendToGroup("check1",[
            ageCheck::class,
            countryCheck::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
