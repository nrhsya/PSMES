<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>View Evaluation Details | PSMES</title>
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
          
    <h2 style="height: 40px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Evaluation Details</h2>

    
    <div style="width: 100%">
        @foreach($evaluation_data as $data)
        <center>
        <div style="margin-left:20%;">
            <table style=" margin-top: 50px">
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Student ID</label></td>
                <td style="width:70%; " type="text" class="form-control">{{$data->std_id}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Student Name</label></td>
                <td style="width:70%; " type="text" class="form-control">{{$data->std_name}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Supervisor Name</label></td>
                <td style="width:70%;" type="text" class="form-control">{{$data->sv_name}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label class="form-label">Evaluator Name</label></td>
                <td style="width:70%;" type="text"  class="form-control">{{$data->eva_name}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label  class="form-label">Evaluation Date</label></td>
                <td style="width:70%;" type="date" class="form-control">{{$data->eva_date}}</td>
            </tr>
            <tr style="height: 60px;">
                <td style="width:10%; margin-left:15px;"><label  class="form-label">Evaluation Time</label></td>
                <td style="width:70%;" type="time" class="form-control">{{$data->eva_time}}</td>
            </tr>
            </table> 
        </div>
        <div>
        </div>    
            @endforeach
    </div>
    <div>
        <a href="{{ url('edit/'.$evaluationdata->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{ url('delete/'.$evaluationdata->id)}}" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a>
        </center>
    </div> 

</div>
</div>
       
@endsection
