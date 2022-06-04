<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rubric;

class RubricController extends Controller

{ 
    
    public function viewRubric(){
    $data_parcel = \App\Models\Rubric::all();

    return view('ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}
    
    public function createRubric(Request $request ){
        \App\Models\Rubric::create($request->all());

        return redirect('/HomePage')->with('success','New Data Successfully Inserted');
    } 
}
