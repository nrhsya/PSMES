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
        <div style="margin-top: 15px; padding:10px 16px; height: 700px; background-color: #F5F5F5;">
          
       <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 12px 0px; background-color:#11ADA4; text-align: center;">Generate Report</h2><br><br>

		
		<center>
        
        <a class="btn btn-success" id="myButton" href="/AddReport"><b>Add</b></a> <br><br>
        
        
        
            <div class="container">
            <table class="table table-hover" id="myTable" class="center">
        
            <tr>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">ID</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Coordinator Name</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Description</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Report Date</th>
                <th style="background-color:#404040; color: white ; border: 3px solid black;">Modification</th>
            </tr>

            @foreach($data_report as $report)
            <tr>
                <td>{{$report->id}}</td>
                <td>{{$report->coord_name}}</td>
                <td>{{$report->description}}</td>
                <td>{{$report->report_date}}</td>
                <td><a href="reportdata/{{$report->id}}/EditReport">Edit</a></td>
            </tr>
            @endforeach
        </table>
          
        </div>
    </div></div>

    </body>
</html>

@endsection('content')



