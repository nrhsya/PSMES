<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Evaluation Details and Marks Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Evaluation Details and Marks Homepage</b></h1>
        </div>
<center>
        <div style="padding:10px;">
            <a id="customButton" href="/AddEvaluation"><b>Add Evaluation</b></a>
            <a id="customButton" href="/ViewEvaluation"><b>View Evaluation</b></a>
            <!--<a id="customButton" href="/EditEvaluation"><b>Edit Evaluation</b></a> -->
            <!--<a id="customButton" href="/DeleteEvaluation"><b>Delete Evaluation</b></a> -->
            <a id="customButton" href="/SubmitMarks"><b>Submit Marks</b></a>
        </div>
</center>

        
    </div>
@endsection