<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\Models\Reminder;

class ReminderController extends Controller
{
    function insertReminder (Request $remind)
    {
        //print_r($remind->input());

        $remind = new Reminder;
        $remind->reminder_title = $remind->reminder_title;
        $remind->reminder_description = $remind->reminder_description;
        $remind->reminder_date = $remind->reminder_date;
        $remind->save();
    }
}