<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Schedule;
use \App\Models\ScheduleDateHistory;

class ScheduleController extends Controller
{
    /* ****************************************************************************************************************** */
    //                                                    COORDINATOR
    /* ****************************************************************************************************************** */

    //function to display evaluation schedule
    public function viewSchedule(){
        $data_schedule = \App\Models\Schedule::join('evaluation_marks', 'evaluation_marks.std_id', '=', 'schedules.std_id')
		                                        ->get(['schedules.*', 'evaluation_marks.eva_mark'])
                                                ->sortByDesc('eva_mark');

        return view('manageTop20/evaluationSchedule', ['data_schedule'=> $data_schedule]);
    }

    //function to view existing evaluation dates
    public function viewEvDate() {
        $data_schedulehistory = \App\Models\ScheduleDateHistory::all();

        return view('manageTop20/manageEvaluationDate', ['data_schedulehistory'=> $data_schedulehistory]);
    }

    //function to add new industry evaluation date
    public function addEvDate(Request $request){
        \App\Models\ScheduleDateHistory::create($request->all());

        return redirect('manageEvaluationDate')->with('success','Industry Evaluation Date Successfully Added');
    }

    public function deleteEvDate($id) {
        $data_schedulehistory = \App\Models\ScheduleDateHistory::find($id);
        $data_schedulehistory -> delete($data_schedulehistory);

        return redirect('manageEvaluationDate')->with('success','Industry Evaluation Date Successfully Deleted');
    }

    //function to assign industry evaluation dates/slots to top 20 students (randomly)
    public function assignSlot(){
        $data_schedule = \App\Models\Schedule::join('evaluation_marks', 'evaluation_marks.std_id', '=', 'schedules.std_id')
		                                        ->get(['schedules.*', 'evaluation_marks.eva_mark'])
                                                ->sortByDesc('eva_mark');

        return view('manageTop20/evaluationSchedule', ['data_schedule'=> $data_schedule]);
    }
    
    // public function assignSlot(Request $id, $start_date, $end_date){
    //     $data_schedulehistory = \App\Models\ScheduleDateHistory::find($id);
        
    //     $data_schedule = \App\Models\Schedule::join('evaluation_marks', 'evaluation_marks.std_id', '=', 'schedules.std_id')
	// 	                                        ->get(['schedules.*', 'evaluation_marks.eva_mark'])
    //                                             ->sortByDesc('eva_mark');

    //     $data_schedule->$eva_date = rand($start_date, $end_date);

    //     return redirect('evaluationSchedule')->with('success','Evaluation Slots have been assigned');
    // }

    /* ****************************************************************************************************************** */
    //                                                    STUDENT
    /* ****************************************************************************************************************** */

    //function for top 20 students to view evaluation schedule
    public function viewStudSchedule() {
        $data_schedule = \App\Models\Schedule::join('evaluation_marks', 'evaluation_marks.std_id', '=', 'schedules.std_id')
		                                        ->get(['schedules.*', 'evaluation_marks.eva_mark'])
                                                // ->paginate(20)
                                                ->sortByDesc('eva_mark');

        return view('manageTop20/studentEvaluationSchedule', ['data_schedule'=> $data_schedule]);
    }

    //function for students to confirm their evaluation date details
    public function viewEvaluationDateDetails($id) {
        $data_schedule = \App\Models\Schedule::join('evaluation_marks', 'evaluation_marks.std_id', '=', 'schedules.std_id')
		                                        ->get(['schedules.*', 'evaluation_marks.eva_mark'])
                                                ->find($id);

        return view('manageTop20/confirmAttendance',['data_schedule'=>$data_schedule]);
    }

    //function to update evaluation date details (slot change)
    public function updateEvaDateDetails(Request $request,$id) {
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule->update($request->all());

        return redirect('studentEvaluationSchedule')->with('success','Evaluation Date Successfully Updated');
    }

    //function to update students' attendance status into the database
    public function attendanceStats(Request $request,$id){
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule->update($request->all());

        return redirect('studentEvaluationSchedule')->with('success','Attendance Confirmed !');
    }
}
