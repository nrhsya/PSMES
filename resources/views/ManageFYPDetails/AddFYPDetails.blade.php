<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Add FYP Details | PSMES</title>
</head>

@section('content')


    <!-- Page Content  -->
    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class=" mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Add FYP Details</b></h1>
            <form action="/fypdata/create" method="POST">
                        {{csrf_field()}}    
                        
                        
                        <!-- Student ID -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                            <input name="std_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student ID">
                        </div>
                        
                        <!-- Student Name -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input name="std_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Name">
                        </div>
                        
                        <!-- Supervisor Name -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supervisor Name</label>
                            <input name="sv_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Supervisor Name">
                               
                        </div>

                        <!-- Evaluator Name -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Evaluator Name </label>
                            <input name="eva_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Evaluator Name">
                        </div>

                        <!-- FYP Title -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">FYP Title</label>
                            <input name="fyp_title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter FYP Title">
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>      
@endsection