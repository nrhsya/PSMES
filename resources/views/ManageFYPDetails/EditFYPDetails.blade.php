<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Edit FYP Details | PSMES</title>
</head>

@section('content')


        <!-- Page Content  -->
    <div style="margin: 0px 0px; padding:0px 0px;height:100%; background-color: white;">
            <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
          <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 5px 0px; background-color:#11ADA4; text-align: center;">Add New Student FYP Details</h2>

    <form style="width:100%;" action="/fypdata/{{$fyp_data->std_id}}/update" method="POST">
                        {{csrf_field()}}  

    <table style="margin-left: 300px; margin-top: 50px">
    <tr style="height: 60px;">
        <td style="width:10%"><label for="exampleFormControlInput2" class="form-label">Student ID</label></td>
        <td style="width:85%"><input style="width:70%;" name="std_id" type="text" value="{{$fyp_data->std_id}}" class="form-control" id="exampleFormControlInput2" placeholder="Enter Student Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%"><label for="exampleFormControlInput2" class="form-label">Student Name</label></td>
        <td style="width:85%"><input style="width:70%;" name="std_name" type="text" value="{{$fyp_data->std_name}}" class="form-control" id="exampleFormControlInput2" placeholder="Enter Student Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%"><label for="exampleFormControlInput3" class="form-label">Supervisor Name</label></td>
        <td style="width:85%"><input style="width:70%;" name="sv_name" type="text" value="{{$fyp_data->sv_name}}" class="form-control" id="exampleFormControlInput3" placeholder="Enter Supervisor Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%"><label for="exampleFormControlInput4" class="form-label">Evaluator Name</label></td>
        <td style="width:85%"><input style="width:70%; " name="eva_name" type="text" value="{{$fyp_data->eva_name}}"  class="form-control" id="exampleFormControlInput4" placeholder="Enter Evaluator Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%"><label for="exampleFormControlInput5" class="form-label">FYP Title</label></td>
        <td style="width:85%"><input style="width:70%;" name="fyp_title" type="text" value="{{$fyp_data->fyp_title}}" class="form-control" id="exampleFormControlInput5" placeholder="Enter FYP Title"></td>
    </tr>
    </table> 
    
    <button style="margin: 40px 45% 80px; padding: 15px 20px;" id="customButton" type="submit" class="btn btn-primary">Submit</button>   
    </form>
</div>
</div>
</div>
          

@endsection