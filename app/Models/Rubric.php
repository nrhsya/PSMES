<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rubric extends Model
{
    use HasFactory;
    protected $fillable = ['rubric_id','competency','excellent_grade','good_grade','moderate_grade','weak_grade','vweak_grade','fail_grade','weightage','mark_given','final_percent'];


}
