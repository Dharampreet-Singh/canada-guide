<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller

{
    public function index()
    {
        return view('mail');
    }
    function sendEmail(Request $request){
        $data=[
            'name'=>$request->name,
            'email'=>$request->mail,
            'message'=>$request->message
        ];

        Mail::to('lvlphp1@gmail.com')->send(new ContactMail($data));
        return 'Thanks for reaching out';
    }
}
