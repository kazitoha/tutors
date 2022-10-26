<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        $request->validate([
        'file' =>"required|mimes:xlsx,pdf,jpeg,png,jpg,gif,svg|max:1048",
        ]);
        $show_data=Excel::toArray(new UsersImport,request()->file('file'));
        $checkdata=array('headline','news_image','topic');
        foreach ($show_data[0][0] as $key1 => $index1) {
          if(!in_array($key1,$checkdata))
          {
            return back()->with('danger_msg','Your excel is invalid. ');
            echo "done";
          }
          else
          {
            Excel::import(new UsersImport,request()->file('file'));
            return back()->with('success_msg','Your excel data inserted Succeefully. ');
          }
        }



    }
}
