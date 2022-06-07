<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FYPDetails;
use Illuminate\Support\Facades\DB;


class FYPDetailsController extends Controller
{
    public function createFYPDetails(Request $request ){
        \App\Models\FYPDetails::create($request->all());

        return redirect('/FYPMainPage')->with('success','New Data Successfully Inserted');
    } 
    public function viewFYPDetails(){
        $fyp_data = \App\Models\FYPDetails::where('std_id',$std_id)->first();
        return view('ManageFYPDetails/ViewAndDeleteFYPDetails', ['fyp_data'=> $fyp_data]);
    }
    public function searchFYPDetails()
    {
        $search_text = $_GET['query'];
        $fyp_data = FYPDetails::where('std_id', 'LIKE', '%'.$search_text.'%')->get();
        return view('ManageFYPDetails.ViewFYPDetails', compact('fyp_data'));
    }
    public function editFYPDetails($std_id)
    {
        $fyp_data = FYPDetails::find($std_id);
        return view('ManageFYPDetails.EditFYPDetails', compact('fyp_data'));
    }

    public function updateFYPDetails(Request $request, $std_id)
    {
        $fyp_data = FYPDetails::find($std_id);
        $fyp_data->std_name = $request->input('std_name');
        $fyp_data->sv_name = $request->input('sv_name');
        $fyp_data->eva_name = $request->input('eva_name');
        $fyp_data->fyp_title = $request->input('fyp_title');
        $fyp_data->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    public function deleteFYPDetails($std_id){
        $fyp_data = \App\Models\FYPDetails::find($std_id);
        $fyp_data -> delete($fypdata);
    
        return redirect('/fypdata')->with('success','Data Successfully Deleted');
    }
    






}
