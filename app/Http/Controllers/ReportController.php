<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\EvaluationMark;

class ReportController extends Controller
{

    //<!-- Calling Report Main page and display report data--> 

    public function ReportPage(){
        $data_report =\App\Models\Report::all();

        return view('ReportModule/ReportPage',['data_report'=> $data_report]);
    }

    //<!-- Function to allow user to insert data in Add Form--> 

    public function createReport(Request $request ){
        \App\Models\Report::create($request->all());

        return redirect('/reportdata')->with('success','New Data Inserted Into The Sytem');
    }

    //<!-- Function to allow user to view Edit Form--> 

    public function EditReport($id ){
        $data_report = \App\Models\Report::find($id);

        return view('ReportModule\EditReport',['data_report'=>$data_report]);
    }

    //<!-- Function to allow user to edit retrieved data in Edit Form--> 

    public function updateReport(Request $request,$id){
        $data_report = \App\Models\Report::find($id);
        $data_report->update($request->all());

        return redirect('/reportdata')->with('success','Report Successfully updated');
    }

    //<!-- Function to display excellentstudent page with the data-->

    public function ExcellentStudent(){
        $data_excellent =\App\Models\EvaluationMark::paginate(20)
        ->sortByDesc('eva_mark');

        return view('ReportModule/ExcellentStudent',['data_excellent'=> $data_excellent]);
    }  

//<!-- Function to display studentprogress page with the data-->
   
//<!-- $post to display the total number of students in the evalaution mark db-->

    public function StudentProgress(){
        $data_progress =\App\Models\EvaluationMark::all();

        $post = \App\Models\EvaluationMark::count();
        return view('ReportModule/StudentProgress',compact('data_progress','post'));
    }

//<!-- Filter function-->

//<!-- $data_progress to filter data-->
//<!-- $post to display the total number of students for every filter function-->

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

//<!-- End Filter Function-->

    
}
