<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Evaluation Schedule | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Industry Evaluation Schedule</b></h1>
        </div>
        <div style="padding:10px;">
            <table class="table table-hover table-success table-striped" width="100%">
                <tr style="background-color:#0958A3;color:white;">
                    <th>No.</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Evaluation Date</th>
                    <th>Attendance Status</th>
                </tr>
                
                <tr style="background-color:white;color:#0958A3;">
                    <td>1</td>
                    <td>CB19079</td>
                    <td>NUR HASYA BINTI MOHD NORDIN</td>
                    <td>null</td>
                    <td><a href="/confirmAttendance" id="customButton"> Confirm Attendance</a></td>
                </tr>

                <tr style="background-color:white;color:#0958A3;">
                    <td>2</td>
                    <td>CB19000</td>
                    <td>MUHAMMAD RAMADHAN BIN LAILATUL QADAR</td>
                    <td>null</td>
                    <td><a href="/confirmAttendance" id="customButton"> Confirm Attendance</a></td>
                </tr>
                
            </table><br><br>

        </div>
    </div>
@endsection