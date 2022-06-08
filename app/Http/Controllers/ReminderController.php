<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reminder;

class ReminderController extends Controller
{

    public function insertReminder(Request $req ){
        
        $var = new reminder;
        $var->reminder_title = $req->inreminder_title;
        $var->reminder_description = $req->inreminder_description;
        $var->reminder_date = $req->inreminder_date;
        $var->save();

        return redirect('/viewReminder')->with('success','New Data Inserted Into The Sytem');
    }
}