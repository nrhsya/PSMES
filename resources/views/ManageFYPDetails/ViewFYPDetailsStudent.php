<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>View FYP Details | PSMES</title>
</head>

@section('content')

    
@if(session('success'))
        <div class="alert alert-primary" role="alert">
             {{session('success')}}
        </div>
        @endif

    <!-- Page Content  -->
<div style="margin: 0px 0px; padding:0px 0px;height:90%; background-color: white;">
<div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
    <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Student FYP Details</h2>

    
    <div style="width: 100%">
        @foreach($fyp_data as $fypdata)
        <center>
        <div style="margin-left:20%;">
            <table style=" margin-top: 50px">
            <tr style="height: 60px;">
                <td style="width:10%;"><label class="form-label">Student ID</label></td>
                <td style="width:70%; margin-left:15px;" type="text" class="form-control">{{$fypdata->std_id}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Student Name</label></td>
                <td style="width:70%; margin-left:15px;" type="text" class="form-control">{{$fypdata->std_name}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Supervisor Name</label></td>
                <td style="width:70%; margin-left:15px;" type="text" class="form-control">{{$fypdata->sv_name}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Evaluator Name</label></td>
                <td style="width:70%; margin-left:15px;" type="text"  class="form-control">{{$fypdata->eva_name}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label  class="form-label">FYP Title</label></td>
                <td style="width:70%; margin-left:15px;" type="text" class="form-control">{{$fypdata->fyp_title}}</td>
            </tr>
            </table> 
        </div>
            </center>    
            @endforeach
    </div>


</div>
</div>
       
@endsection
