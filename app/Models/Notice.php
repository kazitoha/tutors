<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    protected $fillable=['Category_id','headline','image','notice_content','notice_status'];
    // use SoftDeletes;
}
