<?php

namespace App\Http\Controllers\fontEnd_Controller\user_panel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tutors;
use Carbon\Carbon;
use Session;
use Hash;


class loginController extends Controller
{
    function login(){

       return view('fontend/user_panel/fontend_user_login');
    }

    function loginCredential(Request $request){
        $request->validate([
          'email'    =>'required|string',
          'password' =>'required|string',
        ]);

        $panel_email   = $request->email;
        $panel_pass    = $request->password;

       if(tutors::where('email',$panel_email)->exists()){
         $tutors_data=tutors::all()->where('email',$panel_email);
         foreach ($tutors_data as $value) 
         {  $user_id=$value->id;
            $user_name=$value->name;
            $user_email=$value->email;
            $user_phone=$value->phone_num;
            $db_password=Crypt::decryptString($value->password);
         }
         if($db_password == $panel_pass)
         {
           $login_session=Session()->put('user_id',$user_id);
           $login_session=Session()->put('user_data',$tutors_data);
           return redirect()->intended('user/dashboard')->withSuccess('userLogin','You are login now.');
         }
       }
        return redirect('login')->withSuccess('Oppes! You have entered invalid credentials.');
    }

    function loginDashboard(){
        if(session('user_id')){
            return view('fontend/user_panel/user_profile');
        }
        return redirect('login')->withSuccess('Oppes! You have entered invalid credentials.');
    }
}
