<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function viewMarks(){
        $data_mark = \App\Models\EvaluationMark::all();

        return view('manageTop20/viewMarks', ['data_mark'=> $data_mark]);
    }
}
