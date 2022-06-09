<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Student Homepage | PSMES</title>
</head>

@section('content')

<!-- Page Content  -->
<div class="row text-center" style="padding:20px;background-color:#e2e9e9">
    <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
        <h1><b>Student Homepage</b></h1>
    </div>

    <div style="padding:10px;">
        <a id="customButton" href="/studentEvaluationSchedule"><b>Evaluation Schedule</b></a>
        <a id="customButton" href="/ViewRubric"><b>View Rubric</b></a>
    </div>

    
</div>

@endsection