<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Schedule;
use \App\Models\ScheduleDateHistory;

class ScheduleController extends Controller
{
    /* ************************************** */
    // COORDINATOR
    /* ************************************** */

    //function to display evaluation schedule
    public function viewSchedule(){
        // $data_schedule = \App\Models\Schedule::all();
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

    //function to edit existing industry evaluation date (fill in form)
    // public function editEvDate($id){
    //     $data_schedule = \App\Models\ScheduleDateHistory::find($id);

    //     return view('manageEvaluationDate',['data_schedulehistory'=>$data_schedulehistory]);
    // }

    //function to update industry evaluation date into database
    public function updateEvDate(Request $request,$id){
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule -> update($request->all());

        return redirect('evaluationSchedule')->with('success','Industry Evaluation Date Successfully Updated');
    }

    public function deleteEvDate($id) {
        $data_schedulehistory = \App\Models\ScheduleDateHistory::find($id);
        $data_schedulehistory -> delete($data_schedulehistory);

        return redirect('manageEvaluationDate')->with('success','Industry Evaluation Date Successfully Deleted');
    }

    //function to assign industry evaluation dates/slots to top 20 students (randomly)
    public function assignSlot($start_date, $end_date, $eva_date){
        $data_schedule = \App\Models\Schedule::join('evaluation_marks', 'evaluation_marks.std_id', '=', 'schedules.std_id')
		                                        ->get(['schedules.*', 'evaluation_marks.eva_mark'])
                                                ->sortByDesc('eva_mark');

        // $data_schedulehistory = \App\Models\Schedule::find($id);
        // $data_schedule = \App\Models\ScheduleDateHistory::find($id);
        // $data_schedule -> update($request->all());
        // $data_schedule = \App\Models\Schedule::find($id);

        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // Generate random number using above bounds
        $eva_date = rand($min, $max);

        // Convert back to desired date format
        // return date('Y-m-d H:i:s', $eva_date)->with('success','Evaluation Slots have been assigned');

        // $data_schedule = \App\Models\Schedule::find($id);
        // $data_schedule -> update($eva_date->all());

        // return redirect('evaluationSchedule')->with('success','Evaluation Slots have been assigned');

        // return view('evaluationSchedule', ['data_schedule'=> $data_schedule], $eva_date, $start_date, $end_date)->with('success','Evaluation Slots have been assigned');

        return view('evaluationSchedule', ['data_schedule'=> $eva_date])->with('success','Evaluation Slots have been assigned');
    }

    //function to approve students' request for slot change
    public function approveSlot(){
        
    }

    /* ************************************** */
    // STUDENT
    /* ************************************** */

    //function for top 20 students to view evaluation schedule
    public function viewStudSchedule() {
        // $data_schedule = \App\Models\Schedule::all();

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

        // $data_schedule = \App\Models\Schedule::find($id);

        return view('manageTop20/confirmAttendance',['data_schedule'=>$data_schedule]);
    }

    //function to choose submit button
    // public function postAuth()
    // {
    //     if (Input::get('submit') == 'send') {

    //         return redirect(url('/Admin/channel'));
    //     } elseif (Input::get('submit') == 'pay') {

    //         return redirect(url('/pay'));
    //     }

    //function to update evaluation date details (slot change)
    public function updateEvaDateDetails(Request $request,$id) {
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule->update($request->all());

        // return view('manageTop20/studentEvaluationSchedule', ['data_schedule'=> $data_schedule])->with('success','Evaluation Date Successfully Updated');
        return redirect('studentEvaluationSchedule')->with('success','Evaluation Date Successfully Updated');
    }

    //function to update students' attendance status into the database
    public function attendanceStats(Request $request, $id){
        $data_schedule = \App\Models\Schedule::find($id);
        $data_schedule->update($request->all());

        return redirect('studentEvaluationSchedule', ['data_schedule'=>$data_schedule])->with('success','Attendance Confirmed !');

        // return view('manageTop20/studentEvaluationSchedule', ['data_schedule'=> $data_schedule])->with('success','Evaluation Date Successfully Updated');
        // return redirect('studentEvaluationSchedule', ['attendance_status' => 'CONFIRMED'])->with('success','Attendance Confirmed !');
    }
}
