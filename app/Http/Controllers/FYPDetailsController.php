<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FYPDetails;
use Illuminate\Support\Facades\DB;


class FYPDetailsController extends Controller
{
    //Add FYP details function (PSM coordinator)
    public function createFYPDetails(Request $request ){
        \App\Models\FYPDetails::create($request->all());

        return redirect('/FYPMainPage')->with('success','New Data Successfully Inserted');
    } 

    //Search FYP details function (PSM coordinator)
    public function searchFYPDetails()
    {
        $search_text = $_GET['query'];
        $fyp_data = FYPDetails::where('std_id', 'LIKE', $search_text)->get();
        
            return view('ManageFYPDetails.ViewDeleteFYPDetails', compact('fyp_data'));

    }

    //Edit FYP details function (PSM coordinator)
    public function editFYPDetails($id)
    {
        $fyp_data = FYPDetails::find($id);
        return view('ManageFYPDetails.EditFYPDetails', compact('fyp_data'));
    } 
    
    //Update FYP details after edit function (PSM coordinator )
    public function updateFYPDetails(Request $request, $id){
        $fyp_data = FYPDetails::find($id);
        $fyp_data->std_id = $request->input('std_id');
        $fyp_data->std_name = $request->input('std_name');
        $fyp_data->sv_name = $request->input('sv_name');
        $fyp_data->eva_name = $request->input('eva_name');
        $fyp_data->fyp_title = $request->input('fyp_title');
        $fyp_data->update();

        return redirect('/FYPMainPage')->with('success','Data Successfully Updated');
    }
    //Delete FYP details function (PSM coordinator)
    public function deleteFYPDetails(Request $request, $id){
        $fyp_data = FYPDetails::find($id);
        $fyp_data->std_id = $request->input('std_id');
        $fyp_data->std_name = $request->input('std_name');
        $fyp_data->sv_name = $request->input('sv_name');
        $fyp_data->eva_name = $request->input('eva_name');
        $fyp_data->fyp_title = $request->input('fyp_title');
        $fyp_data -> delete();
    
        return redirect('/FYPMainPage')->with('success','Data Successfully Deleted');
    }
    //View FYP details function (student)
    public function viewFYPDetailsStudent($id){
        $fyp_data = \App\Models\FYPDetails::where('std_id',$std_id)->first();
        return view('ManageFYPDetails/ViewFYPDetailsStudent', ['fyp_data'=> $fyp_data]);
    }






}
