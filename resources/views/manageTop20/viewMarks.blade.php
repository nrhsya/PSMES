<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Evaluation Marks | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Evaluation Marks</b></h1>
        </div>

        <div class="container text-center font-weight-bold mt-2">
            <!-- to alert the users with the status of their actions -->
            @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
            @endif
        </div>
        
        <div style="padding:10px;">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <!-- table to display list of students with evaluation marks -->
                <table class="table table-hover" style="LINE-HEIGHT:35px;" width="100%">
                    <tr style="background-color:#0958A3;color:white;">
                        <th>No.</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Evaluation Marks</th>
                    </tr>
                    @foreach($data_mark as $mark)
                    <tr style="background-color:white;color:#0958A3;">
                        <td>{{$mark->eva_id}}</td>
                        <td>{{$mark->std_id}}</td>
                        <td>{{$mark->std_name}}</td>
                        <td>{{$mark->eva_mark}}</td>
                    </tr>
                    @endforeach
                </table><br><br>
            </div>

            <!-- button to generate top 20 students -->
            <a class="mt-5" id="customButton" href="generateTop" onclick="generateTop20()"><b>Generate Top 20 Students</b></a>

            <!-- button to redirect to manage evaluation date page -->
            <a class="mt-5" id="customButton" href="/manageEvaluationDate"><b>Assign Slots</b></a>
        </div>
    </div>
@endsection