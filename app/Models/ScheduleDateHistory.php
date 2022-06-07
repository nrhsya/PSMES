<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDateHistory extends Model
{
    use HasFactory;

    protected $primaryKey = 'schedulehistory_id';

    //fillable property must ada if nk key in data
    protected $fillable = ['start_date','end_date'];
}
