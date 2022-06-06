<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FYPDetailsModel extends Model
{
    use HasFactory;
    protected $fillable = ['std_id','std_name','sv_name','eva_name','fyp_title'];
}
