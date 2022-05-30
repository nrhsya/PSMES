<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>PSM Coordinator Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>PSM Coordinator Homepage</b></h1>
        </div>

        <div class="p-5">
            <a class="mb-3" id="customButton" href="/HomePage"><b>View Rubric</b></a>
            <a class="mb-3" id="customButton" href="#"><b>View Evaluation Details & Mark</b></a>
            <a class="mb-3" id="customButton" href="/evaluationSchedule"><b>View Industry Evaluation Schedule</b></a>
            <a class="mb-3" id="customButton" href="/reportDashboard"><b>View Report</b></a>
        </div>
    </div>
@endsection