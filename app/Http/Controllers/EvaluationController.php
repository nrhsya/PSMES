<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function AddEvaluation(Request $request ){
        \App\Models\Evaluation::create($request->all());

        return redirect('/EvaluationMainPage')->with('success','New Data Successfully Inserted');
   } 

   public function ViewEvaluation(){
    $evaluation_data = \App\Models\Evaluation::all();
    return view('/ViewEvaluation', ['evaluation_data'=> $evaluation_data]);
}
    public function DeleteEvaluation($id){
        $evaluation_data = \App\Models\Evaluation::find($id);
        $evaluation_data -> delete($evaluation_data);

    return redirect('/EvaluationMainPage')->with('success','Data Successfully Deleted');
}

    public function EditEvaluation(Request $request,$id){
        $evaluation_data = \App\Models\Evaluation::find($id);

        return view('/EditEvaluation',['evaluation_data'=>$evaluation_data]); 

}

    public function UpdateEvaluation(Request $request,$id){
    $evaluation_data = \App\Models\Evaluation::find($id);
    $evaluation_data -> edit($request->all());

        return redirect('/EvaluationMainPage')->with('success','Data Successfully Updated');
}



}