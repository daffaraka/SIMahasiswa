<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function send() 
    {
    	Mail::to("user@biodata-mahasiswa.com")->send(new WelcomeMail());

    	return response()->json("Telah sukses mengirim email");
    }
}
