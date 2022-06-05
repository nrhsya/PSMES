<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Evaluation Schedule | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Industry Evaluation Schedule</b></h1>
        </div>
        <div style="padding:10px;">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-hover" style="LINE-HEIGHT:35px;" width="100%">
                    <tr style="background-color:#0958A3;color:white;">
                        <th>No.</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Evaluation Date</th>
                        <th>Attendance Status</th>
                    </tr>
                    @foreach($data_schedule as $schedule)
                    <tr style="background-color:white;color:#0958A3;">
                        <td>{{$schedule->schedule_id}}</td>
                        <td>{{$schedule->std_id}}</td>
                        <td>{{$schedule->std_name}}</td>
                        <td>{{$schedule->eva_date}}</td>
                        <td><a href="scheduleData/{{$schedule->schedule_id}}/viewEvaluationDateDetails" id="customButton"> Confirm Attendance</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection