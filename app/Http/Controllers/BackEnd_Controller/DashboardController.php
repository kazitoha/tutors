<?php

namespace App\Http\Controllers\BackEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Carbon\Carbon;
use Auth;
use Session;
use Gate;



class DashboardController extends Controller
{
   function dashboard()
   {
   
       return view('backend_view/dashboard');
   }
   
}
