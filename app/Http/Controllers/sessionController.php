<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function session(Request $request){
       $request->session()->put('user', $request->name);

    //    Flash Session    Start

    //    Acha ye flash Session ye flash sirf aik bar ke liye save hota he page 
    //    Reload hote he ya dusre page par jate he ye destory hojata he 
    //    Ye ham taab use krte he jese kesi se order kara product iuske baad iusko 
    //    Succces message show karo phr page reload hoga ya dusre page jayega to 
    //    Mesaage gayab hojayega 
       $request->session()->flash('message', "Flash Session Message");
       $request->session()->flash('name', $request->name);
    //    Flash Session    End  

       return redirect('profile');
    }

    function logout(){
        session()->pull('user');
        return redirect('profile');
    }
}
