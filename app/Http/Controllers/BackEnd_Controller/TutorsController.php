<?php

namespace App\Http\Controllers\BackEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tutors;
use Carbon\Carbon;
use Image;
use Gate;

class TutorsController extends Controller
{
    function addTutors()
    {
        // Time_Settings(); this is helper function 
        // echo Time_Settings();

      // filter route where only access for admin
      isCreate();
      return view('Backend_view/tutors');
    }
    function tutorsInsert(Request $request)
    {
      isCreate();
      $request->validate(
      [
        'name'              =>'required|string',
        'father_name'       =>'required|string',
        'mother_name'       =>'required|string',
        'present_address'   =>'required|string',
        'permanent_address' =>'required|string',
        'nid_no'            =>'required|numeric|min:2',
        'date_of_birth'     =>'required|string',
        'gender'            =>'required|string',
        'qualification'     =>'required|string',
        'dept'              =>'required|string',
        'file_path'         =>'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:5120',

      ]);

     $last_insert_id =tutors::insertGetId([
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

      if($request->hasFile('file_path'))
      {
        $main_img=$request->file_path;
        //get file extension $extension
        $extension = $request->file('file_path')->extension();
        $rename_image=$last_insert_id . "." . $extension;

        Image::make($main_img)->resize('715','533')->save(base_path('public/upload_files/tutors_images/'.$rename_image));

        tutors::find($last_insert_id)->update([ 'file_path'=>$rename_image,]);
        return back()->with('success_msg','Tutors Info Insert Successfully');

      }

    }


    // notice list
    function tutorsList(Request $request)
    {  
        $tutors_data=tutors::all()->sortByDesc("id");
        return view('Backend_view/tutors_list',compact('tutors_data'));
    }
    // notice edit

    function NoticeEdit($notice_id)
    {
      isEdit();
       $notice_category_show=Notice_category::all();
       $notice_id=Crypt::decryptString($notice_id);
       $notice_edit_data=Notice::find($notice_id);
       return view('Backend_view/notice_edit',compact('notice_edit_data','notice_category_show'));
    }

    function NoticeEditInsert(Request $request)
    {
      isEdit();
      $request->validate(
      [
        'category_name'=>'required|string',
        'headline'     =>'required|string',
         //this is for file validation where filter pdf,jpeg,png,jpg,gif,svg
        'notice_image' =>'mimes:pdf,jpeg,png,jpg,gif,svg|max:2048',
        'notice_date'  =>'required|date',
        'notice_content'=>'required|string',
      ]);
        //this is for decrypting id  
        $edit_id=Crypt::decryptString($request->edit_id);

        Notice::find($edit_id)->update([
        'category_id'=>$request->category_name,
        'headline'   =>$request->headline,
        'notice_date'=>$request->notice_date,
        'notice_content'=>$request->notice_content,
        'created_at' =>Carbon::now(),
      ]);

      if($request->hasFile('notice_image'))
      {
        $old_image_name=Notice::find($edit_id)->image;
        $main_img=$request->notice_image;
        //get file extension $extension
        $extension = $request->file('notice_image')->extension();
        $rename_image=$edit_id . "." . $extension;
        if($extension == "pdf")
        {
            unlink(base_path('public/upload_files/notice_file/'.$old_image_name));
            //1st $filepath we define the file location and then move it.
            $filePath = public_path('/upload_files/notice_file');
            $main_img->move( $filePath,  $rename_image );
        }
        else
        {
         unlink(base_path('public/upload_files/notice_file/'.$old_image_name));
         Image::make($main_img)->resize('600','600')->save(base_path('public/upload_files/notice_file/'.$rename_image));
        }
        Notice::find($edit_id)->update([ 'image'=>$rename_image,]); 
      }
      return back()->with('success_msg','Notice update Successfully.');
    }
    function NoticeDelete($notice_id)
    {
       isDelete();
      //  $delete_id=Crypt::decryptString($notice_id);

      // decryptingdata() this is come from helper
       $delete_id=decryptingdata($notice_id);  
       $image_id=Notice::find($delete_id)->image;
       Notice::find($delete_id)->delete();
       unlink(base_path('public/upload_files/notice_file/'.$image_id));
       return back();
    }

   // status
    function NoticeActive($notice_id)
    {
        $Inactive=1;
        Notice::find($notice_id)->update(['notice_status'=>$Inactive,]);
        return back();
    }
    function NoticeInactive($notice_id)
    {
        $Inactive=2;
        Notice::find($notice_id)->update(['notice_status'=>$Inactive,]);
        return back();
    }

}
