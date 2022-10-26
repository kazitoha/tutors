<?php

namespace App\Http\Controllers\BackEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Gate;


class RuleController extends Controller
{
    function view()
    {
        // filter route where only access for admin
        if(!Gate::allows('isAdmin')){ 
            abort(404);
        }
        
        $user_data_show=User::all();
        return view('Backend_view.rule',compact('user_data_show'));
    }
    function update(Request $request)
    {
        $rule_apply_id=$request->rule_edit_id;
       
        // create access
        if($request->create_access == 'create')
        {
           $user_data=User::find($rule_apply_id)->update(['create_access'=>$request->create_access]);
        }
        if($request->create_access == 'not_create')
        {
           $user_data=User::find($rule_apply_id)->update(['create_access'=>$request->create_access]);
        }
        // edit access
        if($request->edit_access == 'edit')
        {
            User::find($rule_apply_id)->update(['edit_access'=>$request->edit_access]);
        }
        if($request->edit_access == 'not_edit')
        {
            User::find($rule_apply_id)->update(['edit_access'=>$request->edit_access]);
        }
        // delete access
        if($request->delete_access == 'delete')
        {
            User::find($rule_apply_id)->update(['delete_access'=>$request->delete_access]);
        }
        if($request->delete_access == 'not_delete')
        {
            User::find($rule_apply_id)->update(['delete_access'=>$request->delete_access]);
        }



        return back();
    }
}
