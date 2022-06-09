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

    <!-- For pop up message--> 
    
        @if(session('success'))
        <div class="alert alert-primary" role="alert">
             {{session('success')}}
        </div>
        @endif
    
        <div >
        <div style="margin-top: 15px; padding:10px 16px; height: 700px; background-color: #F5F5F5;">
          
       <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 16px 0px; background-color:#11ADA4; text-align: center;">Generate Report</h2><br><br>

		
		<center>

    <a class="btn btn-success btn-lg" style="border: 3px solid black; margin-right:30px; margin-top:90px;" id="mycustomButton" href="/reportdata"><b>Report Form</b></a> 
    <a class="btn btn-success btn-lg" style="border: 3px solid black; margin-right:30px; margin-top:90px;" id="mycustomButton" href="ExcellentStudent"><b>Excellent Students</b></a>
    <a class="btn btn-success btn-lg" style="border: 3px solid black; margin-right:30px; margin-top:90px;" id="mycustomButton" href="StudentProgress"><b>Student Progress</b></a>

                         
                     </div>
                </div>
            </div>
    </div>    
       
       
    </body>
</html>

@endsection('content')



