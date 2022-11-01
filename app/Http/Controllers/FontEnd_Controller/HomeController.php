<?php

namespace App\Http\Controllers\FontEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\district;
use App\Models\cities;
use Carbon\Carbon;
use App\Models\Notice;




class HomeController extends Controller
{
    function home()
    {
       return view('fontend/home');
    }
}
