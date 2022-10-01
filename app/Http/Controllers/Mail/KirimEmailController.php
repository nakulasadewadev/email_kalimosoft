<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\TagihanInet;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    //
    public function SendEmail(){
        
        $to_email = "tpras0030@gmail.com";
        Mail::to($to_email)->send(new TagihanInet);
        return "<p>Your E-mail has been sent successfully.</p>";
    }


}
