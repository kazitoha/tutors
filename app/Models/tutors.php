<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutors extends Model
{
    protected $fillable=['name','father_name','mother_name','present_address','permanent_address','nid_no','date_of_birth','gender','qualification','dept','gender','file_path'];


    // use HasFactory;
}
