<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\resetPasswordMail;
use App\Models\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function resetPasswordSendEmail(Request $request)
    { 
        $userData = Users::where('email',$request->email)->first();
        $mailData = [
            'id' => $userData->id,
            'email' => $userData->email,
            'title' => 'Mail from Gurukul Nation',
            'body' => 'The reset password link given below click on it and reset your password Thanks!'
        ];
        
        Mail::to($request->email)->send(new resetPasswordMail($mailData));
        return redirect('/')->with('success','Mail sent a verification link! Kindly check your email. Thanks!');
    }

    public function resetPasswordForm(Request $request){
        $email=$request->email;
        return view('emails.resetpassword', compact('email'));
    }
    
    public function resetUserPasswordSave(Request $request){
        $data['password']=\Hash::make($request->password);
        Users::where('email',$request->email)->update($data);
        return redirect('user/signin')->with('success','Password reset success, now you can login with new password. Thanks!');
    }
}
