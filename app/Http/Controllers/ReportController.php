<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function ReportPage(){
        $data_report =\App\Models\report::all();

        return view('ReportModule/ReportPage',['data_report'=> $data_report]);
    }

    public function createReport(Request $request ){
        \App\Models\report::create($request->all());
        return redirect('/reportdata')->with('success','New Data Insert');
    }

    public function EditReport($id ){
        $data_report = \App\Models\report::find($id);
        return view('ReportModule\EditReport',['data_report'=>$data_report]);
    }

    public function updateReport(Request $request,$id){
        $data_report = \App\Models\report::find($id);
        $data_report->update($request->all());
        return redirect('/reportdata')->with('success','Data Successfully updated');
    }
}
