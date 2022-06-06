<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FYPDetails;


class FYPDetailsController extends Controller
{
    public function createFYPDetails(Request $request ){
        \App\Models\FYPDetails::create($request->all());

        return redirect('/FYPMainPage')->with('success','New Data Successfully Inserted');
    } 
    public function viewFYPDetails(){
        $fyp_data = \App\Models\FYPDetails::all();
        return view('ManageFYPDetails/ViewAndDeleteFYPDetails', ['fyp_data'=> $fyp_data]);
    }
    
    public function EditFYPDetails($id ){
        $fyp_data = \App\Models\FYPDetails::find($id);
        return view('ManageFYPDetails/EditFYPDetails',['fyp_data'=>$fyp_data]);
    }

    public function update(Request $request,$id){
        $fyp_data = \App\Models\FYPDetails::find($id);
        $fyp_data -> update($request->all());

        return redirect('/fypdata')->with('success','Data Successfully Updated');
}

public function delete($id){
    $fyp_data = \App\Models\FYPDetails::find($id);
    $fyp_data -> delete($fypdata);

    return redirect('/fypdata')->with('success','Data Successfully Deleted');
}


}
