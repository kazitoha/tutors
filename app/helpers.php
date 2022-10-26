<?php
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

  

   

function Time_Settings()
{
   $time_format=carbon::today()->format('Y-m-d');
   return $time_format ;
}
function isCreate()
{
    // filter route where only access for admin
    if(!Gate::allows('isCreate')){ 
        abort(404);
    }
}
function isEdit()
{
    // filter route where only access for admin
    if(!Gate::allows('isEdit')){ 
        abort(404);
    }
}
function isDelete()
{
    // filter route where only access for admin
    if(!Gate::allows('isDelete')){ 
        abort(404);
    }
}
function encrypteddata($data)
{
  return Crypt::encrypt($value);
}
function decryptingdata($data)
{
    return Crypt::decryptString($data);
} 
// call function encrypted
// encrypted($value);

