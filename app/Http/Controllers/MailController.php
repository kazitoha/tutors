<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function SendMailView()
    {
        return view('emails/email_view');
    }
    function sendEmail(Request $request)
    {
        // email validations
       $request->validate([
         'email_name'=>'required',
         'title'     =>'required',
         'msg'       =>'required',
        ]);

          $sending_email= $request->email_name;
            $details =[
             'title'=>$request->title,
             'msg' =>$request->msg,
            ];
            Mail::to($sending_email)->send(new TestMail($details));
            return back()->with('success_msg','Email send successfully');
    }
}
