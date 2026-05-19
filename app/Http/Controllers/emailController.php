<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\Email;

class emailController extends Controller
{

    // Acha yaha email send horahi he Mail::to() laravel ka built in function he
    // Jisko ham bolte hen is bande ko email behjo or Mail/Email wali file me Ham subject
    // Or message behjte hen  Mail::to($to)->send(new Email($msg, $subject)); jese yaha behja he
    // new Email($msg, $subject ) new Email class ka object bana or iusko msg or subject mil gaya 
    // Phr email file me envelope me subject save howa or content me hamne view wali file load kar
    //  Ab jo hamhe msg behjna he wo hamhe view wali file me {{$msg}} show krna hoga
    // Or msg ko ham apne hisaab se css se styling krke send kr skhte he 
    function sendEmail(){
        $to = "abdulrafay700000@gmail.com";
        $msg = "Dummy Message";
        $subject = "Rafay Full Stack Developer";

        Mail::to($to)->send(new Email($msg, $subject));
    }
}
