<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\EvaluationMark;

class EvaluationMarksController extends Controller
{
    //function to display all evaluation marks (take from evaluation module)
    public function viewMarks(){
        $data_mark = \App\Models\EvaluationMark::all();

        return view('manageTop20/viewMarks', ['data_mark'=> $data_mark]);
    }
}
