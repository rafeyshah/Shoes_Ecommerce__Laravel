<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail; //takes us to mail folder to access ContactMail.php
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('Contactme');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];
        Mail::to($request->email)->send(new ContactMail($details));
        return back()->with('message_send', "Your message has been sent successfully!");
    }
}
