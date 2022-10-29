<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    protected $fillable=['name','bn_name','order','status','lat','lon','url'];
    // use HasFactory;
}
