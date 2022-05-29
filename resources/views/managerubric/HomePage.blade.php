<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Rubric Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Rubric Homepage</b></h1>
        </div>

        <div style="padding:10px;">
            <a id="customButton" href="/AddRubric"><b>Add Rubric</b></a>
            <a id="customButton" href="/EditDeleteRubric"><b>Edit Rubric/Delete Rubric</b></a>
            <a id="customButton" href="/viewRubric"><b>View Rubric</b></a>
        </div>

        
    </div>
@endsection