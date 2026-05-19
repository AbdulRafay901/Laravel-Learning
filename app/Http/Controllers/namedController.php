<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class namedController extends Controller
{
    public function named(){
        // return redirect()->to('named/username');

        return to_route('username');
    }

    public function user(){
        // return redirect()->to('named/user/ahmed');

        return to_route('user', ['xyz' => 'Rafay']);
    }
}
