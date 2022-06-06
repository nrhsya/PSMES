<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title> Add Rubric Homepage | PSMES</title>
</head>
<!-- call function -->
@section('content') 


    <!-- Page Content  -->
    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class=" mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Add Rubric Homepage</b></h1>
            <form action="/rubricdata/{{$data_rubric->id}}/update" method="POST">
                        {{csrf_field()}}    
                        <b>Key In the rubric data:</b>
                        
                        <!-- Rubric ID -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Rubric ID</label>
                            <input name="rubric_id" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->rubric_id}}">
                        </div>
                        
                        <!-- Competency -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Competency</label>
                            <input name="competency" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->competency}}">
                        </div>
                        
                        <!-- excellent_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Excellent Grade</label>
                            <input name="excellent_grade" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->excellent_grade}}">
                               
                        </div>

                        <!-- Good Grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Good Grade </label>
                            <input name="good_grade" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->good_grade}}">
                        </div>

                        <!-- moderate_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Moderate Grade</label>
                            <input name="moderate_grade" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->moderate_grade}}">
                        </div>

                        <!-- weak_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weak Grade</label>
                            <input name="weak_grade"  type="text" class="form-control" id="exampleFormControlInput1"  value="{{$data_rubric->weak_grade}}">
                        </div>
						
						 <!-- vweak_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Very Weak Grade</label>
                            <input name="vweak_grade" type="text" class="form-control" id="exampleFormControlInput1"  value="{{$data_rubric->vweak_grade}}">
                        </div>
						
							 <!-- fail_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fail Grade</label>
                            <input name="fail_grade"  type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->fail_grade}}">
                        </div>
						
							 <!-- weightage -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weightage</label>
                            <input name="weightage"  type="text" class="form-control" id="exampleFormControlInput1"  value="{{$data_rubric->weightage}}">
                        </div>
						
						<!-- mark_given -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mark Given</label>
                            <input name="mark_given"  type="text" class="form-control" id="exampleFormControlInput1"  value="{{$data_rubric->mark_given}}">
                        </div>
						
						<!-- final_percent -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Final Percent</label>
                            <input name="final_percent"  type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_rubric->final_percent}}">
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection
<!-- have to close each time -->
