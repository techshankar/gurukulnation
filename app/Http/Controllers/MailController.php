<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\resetPasswordMail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function resetPasswordSendEmail(Request $request)
    {
        // dd($request->all());
        $mailData = [
            'title' => 'Mail from Marioxsoftware',
            'body' => 'The reset password link given below click on it and reset your password Thanks!'
        ];
         
        FacadesMail::to($request->email)->send(new resetPasswordMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
