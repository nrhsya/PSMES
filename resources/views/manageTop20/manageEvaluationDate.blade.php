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

        <div class = "container">
            <!-- to alert the users -->
            @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
            @endif
        </div>
        
        <!-- form to insert data -->
        <form action="/scheduleData/addEvDate" method="POST">
        {{csrf_field()}}
            <h1 class="text-center">Please provide the dates for the Industry Evaluation</h1><br><br>

            <!-- Start Date -->
            <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label"><b>Start Date</b></label>
                <input name="start_date" type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            
            <!-- End Date -->
            <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label"><b>End Date</b></label>
                <input name="end_date" type="date" class="form-control" id="exampleFormControlInput1">
            </div>

            <button type="submit" class="btn btn-success btn-lg text-center" id="customButton" onclick="saveBtn()">Save</button>
        </form>
    </div>

    <!-- List of existing evaluation dates -->
    <div class="row" style="padding:20px;background-color:#e2e9e9">        
        <table class="table table-hover" style="LINE-HEIGHT:35px;" width="100%">
            <tr style="background-color:#0958A3;color:white;">
                <th>No.</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Created At</th>
                <th colspan="2">ACTIONS</th>
            </tr>
            @foreach($data_schedulehistory as $schedulehistory)
            <tr style="background-color:white;color:#0958A3;">
                <td>{{$schedulehistory->schedulehistory_id}}</td>
                <td>{{$schedulehistory->start_date}}</td>
                <td>{{$schedulehistory->end_date}}</td>
                <td>{{$schedulehistory->created_at}}</td>
                <td><a href="scheduleDateData/{{$schedulehistory->schedulehistory_id}}/editEvDate" id="customButton">Edit</a></td>
                <td><a href="evaluationSchedule" id="customButton">Assign Slots</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection