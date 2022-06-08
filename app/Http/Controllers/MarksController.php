<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Mark;
// use \App\Models\Marks;

class MarksController extends Controller
{
    public function SubmitMarks(Request $request ){
         \App\Models\Mark::create($request->all());

         return redirect('/EvaluationMainPage')->with('success','New Data Successfully Inserted');
    } 
}
