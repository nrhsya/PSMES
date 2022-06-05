<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Schedule;
use \App\Models\ScheduleDateHistory;

class ScheduleController extends Controller
{
    //function to display evaluation schedule
    public function viewSchedule(){
        $data_schedule = \App\Models\Schedule::all();

        return view('manageTop20/evaluationSchedule', ['data_schedule'=> $data_schedule]);
    }

    //function to add new industry evaluation date
    public function addEvDate(Request $request){
        \App\Models\ScheduleDateHistory::create($request->all());

        return redirect('/manageEvaluationDate')->with('success','Industry Evaluation Date Successfully Added');
    }

    //function to edit existing industry evaluation date (fill in form)
    public function editEvDate($id){
        $data_schedule = \App\Models\Schedule::find($id);

        return view('manageEvaluationDate',['data_schedule'=>$data_schedule]);
    }

    //function to update industry evaluation date into database
    public function updateEvDate(Request $request,$id){
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule -> update($request->all());

        return redirect('evaluationSchedule')->with('success','Industry Evaluation Date Successfully Updated');
    }

    //function for top 20 students to view evaluation schedule
    public function viewStudSchedule() {
        $data_schedule = \App\Models\Schedule::all();

        return view('manageTop20/studentEvaluationSchedule', ['data_schedule'=> $data_schedule]);
    }


    //function for students to confirm their evaluation date details
    function viewEvaluationDateDetails($id) {
        $data_schedule = \App\Models\Schedule::find($id);

        return view('manageTop20/confirmAttendance',['data_schedule'=>$data_schedule]);
    }

    //function to update evaluation date details
    function updateEvaDateDetails() {
        
    }

    //function to assign industry evaluation dates/slots to top 20 students (randomly)
    public function assignSlot(){

    }

    //function to update students' attendance status into the database
    public function attendanceStats(){

    }

    //function to approve students' request for slot change
    public function approveSlot(){
        
    }
}
