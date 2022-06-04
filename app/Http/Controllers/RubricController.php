<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rubric;

class RubricController extends Controller

{
    
    public function createRubric(Request $request ){
        \App\Models\Rubric::create($request->all());

        return redirect('managerubric/HomePage')->with('success','New Data Successfully Inserted');
    } }