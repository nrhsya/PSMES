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
            <div class="col-12"style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1 style="height: 40px;  color: #FFFFFF;background-color:#252825; font-size: 16px; padding: 10px 10px; text-align: center;">Evaluation Details List</h1><br>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-hover table-success table-striped" width="100%">
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Supervisor name</th>
                        <th>Evaluator Name</th>
                        <th>Evaluation Date</th>
                        <th>Evaluation Time</th>
                        <th colspan="2">Update / Delete</th>
                    </tr>
                    <tr>
                        <td>{{$data->std_id}}</td>
                        <td>{{$data->std_name}}</td>
                        <td>{{$data->sv_name}}</td>
                        <td>{{$data->eva_name}}</td>
                        <td>{{$data->eva_date}}</td>
                        <td>{{$data->eva_time}}</td>

                        <td><a href="evaluationdata/{{$data->id}}/edit" class="btn btn-primary">Edit</a> </td>
                        <td><a href="evaluationdata/{{$data->id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                </tr> 
                </table>
            </div><br>
        </div>
        <div>
        </div>    
            @endforeach
    </div>
</div>
</div>
       
@endsection
