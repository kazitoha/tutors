<?php

namespace App\Http\Controllers\fontEnd_Controller\user_panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(){

       return view('fontend/user_panel/fontend_user_login');
    }

    function loginDashboard(Request $request){
        $request->validate([
            'email'    =>'required|string',
            'password' =>'required|string',
        ]);

    }
}
