<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title> Delete Evaluation Details | PSMES</title>
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

                        <button type="submit" class="btn btn-primary"  onclick="return confirm('Are you sure?')>Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection
