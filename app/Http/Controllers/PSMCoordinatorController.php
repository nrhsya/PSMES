<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Report;

class PSMCoordinatorController extends Controller
{
    public function homepage()
    {
        return view('coordinator.PSMCoordinatorHomepage');
    }

    public function profile()
    {
        return view('dashboards.coordinators.profile');
    }

    public function settings()
    {
        return view('dashboards.coordinators.settings');
    }


    //Report Module
    public function ReportPage(){
        $data_report =\App\Models\Report::all();

        return view('coordinator/ReportModule/ReportPage',['data_report'=> $data_report]);
    }

    public function createReport(Request $request ){
        \App\Models\Report::create($request->all());
        return redirect('/reportdata')->with('success','New Data Insert');
    }

    public function EditReport($id ){
        $data_report = \App\Models\Report::find($id);
        return view('coordinator/ReportModule/EditReport',['data_report'=>$data_report]);
    }

    public function updateReport(Request $request,$id){
        $data_report = \App\Models\Report::find($id);
        $data_report->update($request->all());
        return redirect('/reportdata')->with('success','Data Successfully updated');
    }


}
