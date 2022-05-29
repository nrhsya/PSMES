<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title> Edit OR Delete Rubric Homepage | PSMES</title>
</head>
<!-- call function -->
@section('content') 


<div class="container rounded bg-white">
        <div class="row">
           
            <div class="col-12"style="background-color:#11ADA4;padding:10px;color:white;width:100%;">

            <div style="padding:5px;">
            <a id="customButton" href="/AddRubric"><b>PSM 1</b></a>
            <a id="customButton" href="/EditDeleteRubric"><b>PSM 2</b></a>
            <a id="customButton" href="/viewRubric"><b>PTA</b></a>
        </div>
     
          
                
                <h1>Rubric Information</h1><br>
               

                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover table-success table-striped" width="100%">
                        <tr>
                            <th>Rubric ID</th>
                            <th>Competency</th>
                            <th>Excellent Grade</th>
                            <th>Good Grade</th>
                            <th>Moderate Grade</th>
                            <th>Weak Grade</th>
                            <th>Very Weak Grade</th>
                            <th>Fail Grade</th>
                            <th>Weightage</th>
                            <th>Mark Given</th>
                            <th>Final Percent</th>
                            <th colspan="2">Update / Delete</th>
                        </tr>
                        
                          <tr> 
                            <td>PSM1</td>
                            <td>sTORYBOARD</td>
                            <td>5</td>
                            <td>4</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>5</td>
                            <td>2</td>
                            <td>2</td>
                            <td><a href="" class="btn btn-success">Update</a></td>
                            <td><a href="" class="btn btn-danger" >Delete</a></td>
                    </tr> 
                    </table>
                </div><br>

            </div>
        </div>

    </div>
    @endsection
