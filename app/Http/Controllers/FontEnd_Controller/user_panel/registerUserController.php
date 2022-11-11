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

  function userEdit(){
    $id=Session('user_data');
    $user_data=tutors::find($id[0]['id']);
    return view('fontend/user_panel/user_edit_profile',compact('user_data'));

  }
  
  function update(Request $request)
  {
    $request->validate([
    'name'              =>'required',
    'father_name'       =>'required',
    'mother_name'       =>'required',
    'email'             =>'required',
    'phone_num'         =>'required|integer',
    'present_address'   =>'required',
    'permanent_address' =>'required',
    'nid_no'            =>'required',
    'date_of_birth'     =>'required',
   ]);
    $id=Session('user_data');
    
    tutors::find($id[0]['id'])
    ->update([
      'name' =>$request->name,
      'father_name' =>$request->father_name,
      'mother_name' =>$request->mother_name,
      'email' =>$request->email,
      'phone_num' =>$request->phone_num,
      'present_address' =>$request->present_address,
      'permanent_address' =>$request->permanent_address,
      'nid_no' =>$request->nid_no,
      'date_of_birth' =>$request->date_of_birth,
     ]);

    return back()->with('success_msg','User update successfully.');
    
  }


}
