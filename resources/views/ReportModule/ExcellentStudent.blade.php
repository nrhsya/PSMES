<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Report Page | PSMES</title>
</head>

@section('content')

<!-- Kalaivani A/P Ramani-->
<!-- CB19063-->

<!DOCTYPE html>
<html>
  
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
        <div >
        <div style="margin-top: 15px; padding:10px 16px; height: 800px; background-color: #F5F5F5;">
          
       <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 12px 0px; background-color:#11ADA4; text-align: center;">Generate Report</h2><br>

		<h3 style="text-align:center;" ><b>Excellent Students</b></h3><br>
		<center>
            
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover" id="myTable" class="center">
        
            <tr>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Student ID</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Student Name</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Supervisor Name</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Evaluator Name</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Evaluation Mark</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Evaluation Comment</th>
            </tr>

    <!-- Calling all the data from evaluation_mark db--> 

            @foreach($data_excellent as $excellent)
            <tr>
                <td>{{$excellent->std_id}}</td>
                <td>{{$excellent->std_name}}</td>
                <td>{{$excellent->sv_name}}</td>
                <td>{{$excellent->eva_name}}</td>
                <td>{{$excellent->eva_mark}}</td>
                <td>{{$excellent->eva_comment}}</td>
            </tr>
            @endforeach
        </table>
          
        </div>
        
    </div><br> 
    <button class="btn btn-success " style="border: 3px solid black; margin-left:35%; margin-right:30px; margin-top:40px;" id="myButton" onclick="window.print()">Print </button>
    <a class="btn btn-success " style="border: 3px solid black; margin-right:30px; margin-top:40px;" id="myButton" href="reportDashboard"><b>Back</b></a>
         
</div>

    
   
    </body>
</html>

@endsection('content')



