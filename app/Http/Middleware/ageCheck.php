<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ye Jo green howa wa code he wo middle har route par apply hoga 
        
        if($request->age < 18){
            die("You Are Not Allowed To Access This Page");
        }

        echo "Age Check";

        return $next($request);
    }
}
