<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Confirm Attendance Page | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Confirm Attendance Page</b></h1>
        </div>
        <!-- form to insert data -->
        <form action="/scheduleData/{{$data_schedule->schedule_id}}/updateEvaDateDetails" method="POST">
            <h1 class="p-3">Please make sure you can attend the assigned slots before you click the "Confirm Attendance" button</h1>
            <p class="p-3" style="color:red;">P/S: Request for <b>Slot Change</b> if you cannot attend the assigned slot !</p>
        
        {{csrf_field()}}
            <div class="p-5" style="background-color:white;border-radius:10px;text-align:left;">
                <!-- Student ID -->
                <div class="form-group row mb-5">
                    <label for="exampleFormControlInput1" class="form-label"><b>Student ID</b></label>
                    <input name="std_id" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_schedule->std_id}}" disabled>
                </div>
                
                <!-- Student Name -->
                <div class="form-group row mb-5">
                    <label for="exampleFormControlInput1" class="form-label"><b>Student Name</b></label>
                    <input name="std_name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_schedule->std_name}}" disabled>
                </div>

                <!-- FYP Title -->
                <div class="form-group row mb-5">
                    <label for="exampleFormControlInput1" class="form-label"><b>FYP Title</b></label>
                    <input name="startDate" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_schedule->fyp_title}}" disabled>
                </div>
                
                <!-- Evaluation Date -->
                <div class="form-group row mb-5">
                    <label for="exampleFormControlInput1" class="form-label"><b>Evaluation Date</b></label>
                    <input name="eva_date" type="date" class="form-control" id="exampleFormControlInput1" value="{{$data_schedule->eva_date}}">
                </div>

                <!-- Attendance Status -->
                <div class="form-group row mb-2">
                    <label for="exampleFormControlInput1" class="form-label"><b>Attendance Status</b></label>
                    <select name="attendance_status" class="form-select" aria-label="Gender">
                        <option selected>Choose Attendance Status</option>
                        <option value="WAITING FOR CONFIRMATION" @if($data_schedule->attendance_status=='WAITING FOR CONFIRMATION') selected @endif>WAITING FOR CONFIRMATION</option>
                        <option value="CONFIRMED" @if($data_schedule->attendance_status=='CONFIRMED') selected @endif>CONFIRMED</option>
                    </select>
                </div>
            </div><br><br>

            <!-- <a id="customButton" href="/scheduleData/{{$data_schedule->schedule_id}}/attendanceStats"><input name="attendance_status" type="text">Confirm Attendance</a> -->
            <button type="submit" class="btn btn-success btn-lg" id="customButton" value="submitAttendance">Confirm Attendance</button>

            <!-- <button id="customButton"><input name="attendance_status" type="text" value="Confirm Attendance" onclick="ConfirmAttendanceBtn()"></button> -->
            <button type="submit" class="btn btn-success btn-lg" id="customButton" value="requestChange">Request Slot Change</button>
        </form>
    </div>
@endsection