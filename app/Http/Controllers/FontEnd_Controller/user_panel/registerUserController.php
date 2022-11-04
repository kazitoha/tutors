<?php

namespace App\Http\Controllers\FontEnd_Controller\user_panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\tutors;
use Carbon\Carbon;



class registerUserController extends Controller
{
    function register(){
    
      return view('fontend/user_panel/fontend_user_register');

    }

    function registerInsert(Request $request){
       $request->validate([
        'name'              =>'required|string',
        'email'             =>'required|string|unique:tutors',
        'phone_num'         =>'required|integer|min:11',
        'password'          =>'required|min:8',
        'confirm_password'  =>'required|min:8|same:password',
       ]);


   tutors::insert([
     'name'             =>$request->name,
     'email'            =>$request->email,
     'phone_num'        =>$request->phone_num,
     'password'         =>Crypt::encryptString($request->password),
     'created_at'       =>Carbon::now(),
   ]);

   return view('fontend/user_panel/fontend_user_login')->with('success_msg','Register Success');
  }


}
