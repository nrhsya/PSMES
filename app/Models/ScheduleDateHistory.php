<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDateHistory extends Model
{
    use HasFactory;

    // to set the default 'id' for the ScheduleDateHistory table as 'schedulehistory_id'
    protected $primaryKey = 'schedulehistory_id';

    //fillable property to allows data to be entered into the system
    protected $fillable = ['start_date','end_date'];
}
