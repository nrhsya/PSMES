<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rubric;

class RubricController extends Controller

{ 

//view Rubric
public function viewRubric(){
    $data_rubric = \App\Models\Rubric::all();
    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}
    
//add Rubric
    public function createRubric(Request $request ){

        $request->validate([
            'rubric_id' => 'required',
            'competency' => 'required',
            'excellent_grade' => 'required',
            'good_grade' => 'required',
            'moderate_grade' => 'required',
            'weak_grade' => 'required',
            'vweak_grade' => 'required',
            'fail_grade' => 'required',
            'weightage' => 'required',
            'mark_given' => 'required',
            'final_percent' => 'required',
        ]);
        \App\Models\Rubric::create($request->all());
        return redirect('/rubricdata')->with('success','New Data Successfully Inserted');
    } 

 //call edit rubric form  
    public function EditRubric($id ){
        $data_rubric = \App\Models\Rubric::find($id);
        return view('managerubric/EditRubric',['data_rubric'=>$data_rubric]);
    }


//Update Rubric

    public function update(Request $request,$id){
        $data_rubric = \App\Models\Rubric::find($id);
        $data_rubric -> update($request->all());

        return redirect('/rubricdata')->with('success','Data Successfully Updated');
}

//delete Rubric
public function delete($id){
    $data_rubric = \App\Models\Rubric::find($id);
    $data_rubric -> delete($data_rubric);

    return redirect('/rubricdata')->with('success','Data Successfully Deleted');
}

//filter PSM1 for coordinator view
public function viewPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM1');

    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM2 for coordinator view
public function viewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM2');

    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//filter PTA for coordinator view
public function viewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PTA');

    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//function to display rubric for students
public function StdviewRubric(){
    $data_rubric = \App\Models\Rubric::all();

    return view('managerubric/ViewRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM1 for student view
public function sviewPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM1');

    return view('managerubric/ViewRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM2 for student view
public function sviewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM2');

    return view('managerubric/ViewRubric', ['data_rubric'=> $data_rubric]);
}

//filter PTA for student view
public function sviewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PTA');

    return view('managerubric/ViewRubric', ['data_rubric'=> $data_rubric]);

}

   //function to display rubric for evaluator
public function EvaviewRubric(){
    $data_rubric = \App\Models\Rubric::all();

    return view('managerubric/EvalView', ['data_rubric'=> $data_rubric]);
}

//filter PSM1  for evaluator
public function eviewPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM1');

    return view('managerubric/EvalView', ['data_rubric'=> $data_rubric]);
}

//filter PSM2  for evaluator
public function eviewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM2');

    return view('managerubric/EvalView', ['data_rubric'=> $data_rubric]);
}

//filter PTA  for evaluator
public function eviewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PTA');

    return view('managerubric/EvalView', ['data_rubric'=> $data_rubric]); 

}

}