<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function getUser(Request $request){
        $request->validate([
            // Acha yaha ham validation kar wahen he kiya kiya required he  
            'name' => 'required | min:3 | max:5 | Uppercase',
            'email' => 'required | email',
            'checkbox' => 'required',
            'radio' => 'required',
            'dropdown' => 'required',
            'range' => 'required'
        ],
        [
            // Dekho ya ham Custom error message likh skhte he 
             'name.required' => 'Name Likhna zaroori he',
             'name.min' => '3 alphabet ho kaam as kaam',
             'name.max' => '5 se ziyada alphabet nhi ho',
        ]);
        
        echo $request->name." : ".$request->email." : ".$request->radio." : ".$request->dropdown." : ".$request->range." : "
        .$request->method()." : ".$request->ip()." : ".$request->path()." : ".$request->url();
        echo "<br>";
        if($request->method('POST')){
            echo "Method Post";
        }else{
            echo "Method Koi or sa he";
        }
    
        foreach($request->checkbox as $c){
            echo $c." : ";
        };
    }
}
