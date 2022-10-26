<?php

namespace App\Http\Controllers\FontEnd_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Notice;




class HomeController extends Controller
{
    function home()
    {
       return view('fontend/home');
    }
}
