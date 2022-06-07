<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Add FYP Details | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div style="margin: 0px 0px; padding:0px 0px;height:100%; background-color: white;">
            <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
          <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 5px 0px; background-color:#11ADA4; text-align: center;">Add New Student FYP Details</h2>

          <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover table-success table-striped" width="100%">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Supervisor Name</th>
                            <th>Evaluator Name</th>
                            <th>FYP Title</th>
                            <th colspan="2">Update / Delete</th>
                        </tr>
                        @foreach($data_rubric as $rubric)
                        <tr>
                        <tr>
                            <td>{{$std_id->std_id}}</td>
                            <td>{{$std_name->std_name}}</td>
                            <td>{{$sv_name->sv_name}}</td>
                            <td>{{$fyp->eva_name}}</td>
                            <td>{{$fyp->fyp_title}}</td>
                        
                            <td><a href="fypdata/{{$fyp->std_id, }}/edit" class="btn btn-success">Update</a></td>
                            <td><a href="fypdata/{{$fyp->std_id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                    </tr> 
                    @endforeach 
                    </table>

          
@endsection