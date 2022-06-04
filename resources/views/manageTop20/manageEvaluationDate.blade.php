<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Manage Evaluation Date Page | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-3" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Manage Industry Evaluation Schedule</b></h1>
        </div>
        <!-- form to insert data -->
        <form action="" method="POST">

            <h1 class="text-center">Please provide the dates for the Industry Evaluation</h1><br><br>

            <!-- Start Date -->
            <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label"><b>Start Date</b></label>
                <input name="startDate" type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            
            <!-- End Date -->
            <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label"><b>End Date</b></label>
                <input name="endDate" type="date" class="form-control" id="exampleFormControlInput1">
            </div>

            <a href="#" class="btn btn-success btn-lg text-center" id="customButton" onclick="saveBtn()">Save</a>
        </form>
    </div>
@endsection