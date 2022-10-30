<?php

namespace App\Http\Controllers\FontEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tutors;
use App\Models\district;
use Carbon\Carbon;
Use Image;
use Gate;
class TutorsController extends Controller
{
  function tutorsInsert(Request $request)
  {
    $request->validate(
      [
        'name'              =>'required|string',
        'father_name'       =>'required|string',
        'mother_name'       =>'required|string',
        'email'             =>'required|string',
        'phone_num'         =>'required|string',
        'present_address'   =>'required|string',
        'present_thana'   =>'required|string',
        'present_district'  =>'required|string',
        'permanent_address' =>'required|string',
        'permanent_thana'   =>'required|string',
        'permanent_district'=>'required|string',
        'nid_no'            =>'required|numeric',
        'date_of_birth'     =>'required|string',
        'gender'            =>'required|string',
        'qualification'     =>'required|string',
        'dept'              =>'required|string',

      ]);

       tutors::insert([
         'name'                =>$request->name,
         'father_name'         =>$request->father_name,
         'mother_name'         =>$request->mother_name,
         'present_address'     =>$request->present_address,
         'permanent_address'   =>$request->permanent_address,
         'nid_no'              =>$request->nid_no,
         'date_of_birth'       =>$request->date_of_birth,
         'gender'              =>$request->gender,
         'qualification'       =>$request->qualification,
         'dept'                =>$request->dept,
         'created_at'          =>Carbon::now(),
        ]);

       return back();
  }

  function districtList(){
       $data=district::all();
       return $data;

  }
}
