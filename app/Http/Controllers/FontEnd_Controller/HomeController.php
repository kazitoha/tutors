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
    function districtList(){
       $data=district::all();
      return response()->json($test);
      // $district_names=states::select('name')->get();
      // return response()->json($district_names);
    }
}
