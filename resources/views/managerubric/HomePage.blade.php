<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Rubric Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Rubric Homepage</b></h1>
        </div>
<center>
        <div style="padding:10px;">
            <a id="customButton" href="/AddRubric"><b>Add Rubric</b></a>
            <a id="customButton" href="/rubricdata"><b>View Rubric</b></a>
        </div>
</center>



        
    </div>
@endsection