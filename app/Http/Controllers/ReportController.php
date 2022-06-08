<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\EvaluationMark;

class ReportController extends Controller
{
    public function ReportPage(){
        $data_report =\App\Models\Report::all();

        return view('ReportModule/ReportPage',['data_report'=> $data_report]);
    }

    public function createReport(Request $request ){
        \App\Models\Report::create($request->all());

        return redirect('/reportdata')->with('success','New Data Inserted Into The Sytem');
    }

    public function EditReport($id ){
        $data_report = \App\Models\Report::find($id);

        return view('ReportModule\EditReport',['data_report'=>$data_report]);
    }

    public function updateReport(Request $request,$id){
        $data_report = \App\Models\Report::find($id);
        $data_report->update($request->all());

        return redirect('/reportdata')->with('success','Report Successfully updated');
    }

    public function ExcellentStudent(){
        $data_excellent =\App\Models\EvaluationMark::paginate(20)
        ->sortByDesc('eva_mark');

        return view('ReportModule/ExcellentStudent',['data_excellent'=> $data_excellent]);
    }

    public function StudentProgress(){
        $data_progress =\App\Models\EvaluationMark::all();

        $post = \App\Models\EvaluationMark::count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

//Filter function//

    public function Above80(){
        $data_progress = \App\Models\EvaluationMark::all()->whereBetween('eva_mark', [79,101]);

        $post = \App\Models\EvaluationMark::whereBetween('eva_mark', [79,101])->count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

    public function Above70(){
        $data_progress= \App\Models\EvaluationMark::all()->whereBetween('eva_mark', [69,80]);

        $post = \App\Models\EvaluationMark::whereBetween('eva_mark', [69,80])->count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

    public function Above60(){
        $data_progress = \App\Models\EvaluationMark::all()->whereBetween('eva_mark', [59,70]);

        $post = \App\Models\EvaluationMark::whereBetween('eva_mark', [59,70])->count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

    public function Above50(){
        $data_progress= \App\Models\EvaluationMark::all()->whereBetween('eva_mark', [49,60]);

        $post = \App\Models\EvaluationMark::whereBetween('eva_mark', [49,60])->count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

    public function Above40(){
        $data_progress = \App\Models\EvaluationMark::all()->whereBetween('eva_mark', [39,50]);

        $post = \App\Models\EvaluationMark::whereBetween('eva_mark', [39,50])->count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

    public function Below40(){
        $data_progress= \App\Models\EvaluationMark::all()->whereBetween('eva_mark', [0,40]);

        $post = \App\Models\EvaluationMark::whereBetween('eva_mark', [0,40])->count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

//End Filter

public function tryindex()
{
    $data_result = Rubric::leftJoin('rubrics', 'rubrics.id', '=', 'report.id')
            ->select('rubrics.*')
            ->get();
            return view('ReportModule/StudentProgress',['data_result'=> $data_result]);
}

//Count

//public function CountStudents(){
//    $data_progress =\App\Models\EvaluationMark::all();
//
  // $post = \App\Models\EvaluationMark::where('eva_mark', '=' ,'10.61')->count();
 //return view('ReportModule/StudentProgress',compact('data_progress','post'));
//} 



//End Count

    
}
