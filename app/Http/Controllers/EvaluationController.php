<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Evaluation;

class EvaluationController extends Controller
{
    //add evaluation details
    public function AddEvaluation(Request $request ){
        \App\Models\Evaluation::create($request->all());

        return redirect('/EvaluationMainPage')->with('success','New Data Successfully Inserted');
   } 
    //View evaluation list
   public function ViewEvaluation(){
    $evaluation_data = \App\Models\Evaluation::all();

    return view('ManageEvaluationDetailsAndMarks/ViewEvaluation', ['evaluation_data'=> $evaluation_data]);
} 
    //delete evaluation details
    public function DeleteEvaluation($id){
        $evaluation_data = \App\Models\Evaluation::find($id);
        $evaluation_data -> delete($evaluation_data);

    return redirect('/evaluationdata')->with('success','Data Successfully Deleted');
}
   //Call edit form
    public function EditEvaluation(Request $request,$id){
        $evaluation_data = \App\Models\Evaluation::find($id);

        return view('ManageEvaluationDetailsAndMarks/EditEvaluation',['evaluation_data'=>$evaluation_data]); 

}
    //Update evaluation detail
    public function UpdateEvaluation(Request $request,$id){
    $evaluation_data = \App\Models\Evaluation::find($id);
    $evaluation_data -> update($request->all());

        return redirect('/EvaluationMainPage')->with('success','Data Successfully Updated');
}



}