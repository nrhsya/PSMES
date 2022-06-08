<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title> Add Evaluation Details | PSMES</title>
</head>
<!-- call function -->
@section('content') 

@if ($errors->any())
    <div class="alert alert-primary" role="alert">
     
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
@endif

    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class=" mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Add Evaluation Details Form</b></h1>
            <form action="" method="POST">
                        {{csrf_field()}}    
                        <b>Fill Evaluation Details Form:</b>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                            <input name="std_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student ID">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student name</label>
                            <input name="std_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Supervisor name</label>
                            <input name="sv_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Supervisor name">
                        </div>        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Evaluator name</label>
                            <input name="eva_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Evaluator name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Evaluation date</label>
                            <input name="eva_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Evaluation date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Evaluation time</label>
                            <input name="eva_time"  type="time" class="form-control" id="exampleFormControlInput1"  placeholder="Evaluation time">
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection
