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
            <form action="">
                    
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
                            <input name="excellent_grade" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Excellent Grade">
                               
                        </div>

                        <!-- Good Grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Good Grade </label>
                            <input name="good_grade" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Good Grade">
                        </div>

                        <!-- moderate_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Moderate Grade</label>
                            <input name="moderate_grade" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Moderate Grade">
                        </div>

                        <!-- weak_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weak Grade</label>
                            <textarea name="weak_grade"  type="number" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Weak Grade"></textarea>
                        </div>
						
						 <!-- vweak_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Very Weak Grade</label>
                            <textarea name="vweak_grade" type="number" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Very Weak Grade"></textarea>
                        </div>
						
							 <!-- fail_grade -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fail Grade</label>
                            <textarea name="fail_grade"  type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Fail Grade"></textarea>
                        </div>
						
							 <!-- weightage -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weightage</label>
                            <textarea name="weightage"  type="number" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Weightage"></textarea>
                        </div>
						
						<!-- mark_given -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mark Given</label>
                            <textarea name="mark_given"  type="number" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Mark Given"></textarea>
                        </div>
						
						<!-- final_percent -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Final Percent</label>
                            <textarea name="final_percent"  type="number" class="form-control" id="exampleFormControlInput1"  placeholder="Enter Final Percent"></textarea>
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection
<!-- have to close each time -->