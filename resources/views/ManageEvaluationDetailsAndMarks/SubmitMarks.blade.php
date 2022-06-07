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
            <form action="/markdata/create" method="POST">
                        {{csrf_field()}}    
                        <b>Add Marks Form:</b>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                            <input name="std_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Student ID">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Evaluation mark</label>
                            <input name="eva_mark" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Evaluation mark">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Evaluation comment</label>
                            <input name="eva_comment" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Evaluation comment">
                        </div>        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection