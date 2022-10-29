<?php

namespace App\Http\Controllers\FontEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\states;
use App\Models\cities;
use Carbon\Carbon;
use App\Models\Notice;




class HomeController extends Controller
{
    function home()
    {
       $district_names=states::select('name')->get();
       return view('fontend/home',compact('district_names'));
    }
}
