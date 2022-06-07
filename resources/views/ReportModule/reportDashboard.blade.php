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
          
       <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 16px 0px; background-color:#11ADA4; text-align: center;">Generate Report</h2><br><br>

		
		<center>

    <a class="btn btn-success btn-lg" style="border: 3px solid black; margin-right:30px; margin-top:90px;" id="mycustomButton" href="/reportdata"><b>Report Form</b></a> 
    <a class="btn btn-success btn-lg" style="border: 3px solid black; margin-right:30px; margin-top:90px;" id="mycustomButton" href="/reportdata"><b>Excellent Students</b></a>
    <a class="btn btn-success btn-lg" style="border: 3px solid black; margin-right:30px; margin-top:90px;" id="mycustomButton" href="/reportdata"><b>Student Progress</b></a>

                         
                     </div>
                </div>
            </div>
    </div>    
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

@endsection('content')



