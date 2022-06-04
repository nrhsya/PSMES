<?php

namespace App\Http\Controllers;
use \App\Models\EvaluationMark;

use Illuminate\Http\Request;

class Top20Controller extends Controller
{
    //function to generate top 20 student (using sort)
    public function generateTop(){
        $data_mark = \App\Models\EvaluationMark::paginate(20)
        ->sortByDesc('eva_mark'); //order marks from highest to lowest

        return view('manageTop20/viewMarks', ['data_mark'=> $data_mark]);
    }
}
