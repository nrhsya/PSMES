<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rubric;

class RubricController extends Controller

{ 


    public function viewRubric(){
        $data_rubric = \App\Models\Rubric::all();
        return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}
    
    public function createRubric(Request $request ){
        \App\Models\Rubric::create($request->all());

        return redirect('/HomePage')->with('success','New Data Successfully Inserted');
    } 

    
    public function EditRubric($id ){
        $data_rubric = \App\Models\Rubric::find($id);
        return view('managerubric/EditRubric',['data_rubric'=>$data_rubric]);
    }

    public function update(Request $request,$id){
        $data_rubric = \App\Models\Rubric::find($id);
        $data_rubric -> update($request->all());

        return redirect('/rubricdata')->with('success','Data Successfully Updated');
}

public function delete($id){
    $data_rubric = \App\Models\Rubric::find($id);
    $data_rubric -> delete($data_rubric);

    return redirect('/rubricdata')->with('success','Data Successfully Deleted');
}

//filter PSM1
public function filterPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM1');

    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM2
public function viewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PSM2');

    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}
//filter PSM1
public function viewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('rubric_id', '=', 'PTA');

    return view('managerubric/ViewAndDeleteRubric', ['data_rubric'=> $data_rubric]);
}

}