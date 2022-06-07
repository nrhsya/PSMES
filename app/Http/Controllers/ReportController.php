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
        $data_excellent =\App\Models\EvaluationMark::all();

        return view('ReportModule/ExcellentStudent',['data_excellent'=> $data_excellent]);
    }

    public function StudentProgress(){
        $data_progress =\App\Models\EvaluationMark::all();

        return view('ReportModule/StudentProgress',['data_progress'=> $data_progress]);
    }

    public function male(){
        $data_cust = \App\Models\customer::all()->where('Gender','=','Male');
        return view('Admindashboards\CustomerDetails',['data_cust'=> $data_cust]);
    }

    public function female(){
        $data_cust= \App\Models\customer::all()->where('Gender','=','Female');
        return view('Admindashboards\CustomerDetails',['data_cust'=> $data_cust]);
    }

    
}
