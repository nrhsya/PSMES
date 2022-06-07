<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title> Add Rubric Homepage | PSMES</title>
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

    <!-- Page Content  -->
    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class=" mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Add Rubric Homepage</b></h1>
            <form action="/rubricdata/create" method="POST">
                        {{csrf_field()}}    
                        <b>Key In the rubric data:</b>
                        
                        <!-- Rubric ID -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Rubric ID</label>
                            <input name="rubric_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Rubric ID">
                        </div>
                        
                        <!-- Competency -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Competency</label>
                            <input name="competency" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Competency">
                        </div>
                        
                        <!-- excellent_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Excellent Grade</label>
                            <input name="excellent_grade" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Excellent Grade">
                               
                        </div>

                        <!-- Good Grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Good Grade </label>
                            <input name="good_grade" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Good Grade">
                        </div>

                        <!-- moderate_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Moderate Grade</label>
                            <input name="moderate_grade" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Moderate Grade">
                        </div>

                        <!-- weak_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weak Grade</label>
                            <input name="weak_grade"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Weak Grade">
                        </div>
						
						 <!-- vweak_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Very Weak Grade</label>
                            <input name="vweak_grade" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Very Weak Grade">
                        </div>
						
							 <!-- fail_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fail Grade</label>
                            <input name="fail_grade"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Fail Grade">
                        </div>
						
							 <!-- weightage -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weightage</label>
                            <input name="weightage"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Weightage">
                        </div>
						
						<!-- mark_given -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mark Given</label>
                            <input name="mark_given"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Mark Given">
                        </div>
						
						<!-- final_percent -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Final Percent</label>
                            <input name="final_percent"  type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Final Percent">
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection
<!-- have to close each time -->