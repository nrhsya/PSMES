<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Confirm Attendance Page | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Slot Change Page</b></h1>
        </div>
        <!-- form to insert data -->
        <form action="" method="POST">

            <h1 class="p-3">Please enter the date you can attend</h1>

            <div class="p-5" style="background-color:white;border-radius:10px;text-align: left;">
                <!-- Student ID -->
                <div class="form-group row">
                <label for="exampleFormControlInput1" class="form-label"><b>Student ID</b></label>
                <input name="startDate" type="text" class="form-control" id="exampleFormControlInput1">
                </div><br><br>
                
                <!-- Student Name -->
                <div class="form-group row">
                    <label for="exampleFormControlInput1" class="form-label"><b>Student Name</b></label>
                    <input name="startDate" type="text" class="form-control" id="exampleFormControlInput1">
                </div><br><br>

                <!-- FYP Title -->
                <div class="form-group row">
                    <label for="exampleFormControlInput1" class="form-label"><b>FYP Title</b></label>
                    <input name="startDate" type="text" class="form-control" id="exampleFormControlInput1">
                </div><br><br>
                
                <!-- Evaluation Date -->
                <div class="form-group row">
                    <label for="exampleFormControlInput1" class="form-label"><b>Evaluation Date</b></label>
                    <input name="endDate" type="date" class="form-control" id="exampleFormControlInput1">
                </div>
            </div><br><br>

            <a href="#" class="btn btn-success btn-lg" id="customButton">Confirm Change</a>
        </form>
    </div>
@endsection