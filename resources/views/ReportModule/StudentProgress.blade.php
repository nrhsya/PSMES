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
    
    <style>
       .section-1 {
         background-color: #f5ccff;
       }
         
       </style>
    
        @if(session('success'))
        <div class="alert alert-primary" role="alert">
             {{session('success')}}
        </div>
        @endif
    
        <div >
        <div style="margin-top: 15px; padding:10px 16px; height: 800px; background-color: #F5F5F5;">
          
       <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 12px 0px; background-color:#11ADA4; text-align: center;">Generate Report</h2><br><br>

		<h3 style="text-align:center;" ><b>Student Progress</b></h3>
		<center>
            
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 Filter by :<i class="fa fa-caret-down"></i>
            </button>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                 <li><a class="dropdown-item" href="/gradedata/male">Grade A</a></li>
                 <li><a class="dropdown-item" href="/gradedata/female">Grade B</a></li>
             </ul>
        </div><br><br>
    
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover" id="myTable" class="center">
        
            <tr>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Student ID</th>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Student Name</th>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Evaluation Mark</th>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Evaluation Comment</th>
            </tr>

            @foreach($data_progress as $progress)
            <tr>
                <td>{{$progress->std_id}}</td>
                <td>{{$progress->std_name}}</td>
                <td>{{$progress->eva_mark}}</td>
                <td>{{$progress->eva_comment}}</td>
            </tr>
            @endforeach
        </table>
          
        </div>
        
    </div><br> 
    <button class="btn btn-success " style="border: 3px solid black; margin-left:35%; margin-right:30px; margin-top:40px;" id="mycustomButton" onclick="window.print()">Print </button>
    <a class="btn btn-success " style="border: 3px solid black; margin-right:30px; margin-top:40px;" id="mycustomButton" href="reportDashboard"><b>Back</b></a>
         
</div>

    
   
    </body>
</html>

@endsection('content')



