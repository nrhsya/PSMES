<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>PSM Coordinator Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="btn-group inline row text-center" style="padding:20px;background-color:#e2e9e9">
        <div class="col-4">
            <h3><b>Student List</b></h3><br>
            <a class="btn btn-success btn-lg" id="customButton" href="/studentList"><b>Student List</b></a><br><br>
            <p>View a list of students<br>enrolled in this tuition</p>
        </div>

        <div class="col-4">
            <h3><b>Course List</b></h3><br>
            <a class="btn btn-success btn-lg" id="customButton" href="/courseList"><b>Course List</b></a><br><br>
            <p>View a list of all <br>available courses in <br>this tuition.</p>
        </div>

        <div class="col-4">
            <h3><b>Report</b></h3><br>
            <a class="btn btn-success btn-lg" id="customButton" href="/viewReport"><b>View Report</b></a><br><br>
            <p>Summarize all the <br>information through <br>the report</p>
        </div>
    </div>
@endsection