<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // to set the default 'id' for the Schedule table as 'schedule_id'
    protected $primaryKey = 'schedule_id';

    //fillable property to allows data to be entered into the system
    protected $fillable = ['eva_date', 'attendance_status'];
}
