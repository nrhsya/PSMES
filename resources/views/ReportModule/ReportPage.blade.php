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
    
        <br>
		<h1 style="text-align:center ; position:left;background-color:#11ADA4; padding:20px; color:white" ><b>Generate Report</b></h1><br>
		<br>
		
		<center>
        
        <button type="button" class="btn btn-success btn-lg" id="mycustomButton" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add 
        </button><br><br>
        
        
            <div class="container">
            <table class="table table-hover" id="myTable" class="center">
        
            <tr>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">ID</th>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Coordinator Name</th>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Description</th>
                <th style="background-color:#7a0099; color: white ; border: 3px solid black;">Report Date</th>
                <th colspan="6" style="background-color:#7a0099; color: white ; border: 3px solid black;">Operation
            </tr>

            @foreach($data_report as $report)
            <tr>
                <td>{{$report->report_id}}</td>
                <td>{{$report->coord_name}}</td>
                <td>{{$report->description}}</td>
                <td>{{$report->report_date}}</td>
                <td><a href="reportdata/{{$report->report_id}}/EditReport">Edit</a></td>
            </tr>
            @endforeach
        </table>
          
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog"><br><br><br>
                    <div class="modal-content">
                        <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Report Details</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                        <form action="/reportdata/create" method="POST">
                        {{csrf_field()}}    
                    
                         <div class="mb-3">
                            <select name="coord_name" class="form-select" aria-label="coord_name">
                                <option selected>Coordinator Name</option>
                                <option value="Dr.Danakorn Nincarean">Dr.Danakorn Nincarean</option>                                                 
                           </select><br>

                    
                        <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Desciprtion</label>
                            <textarea name="description" class="form-control" placeholder="Desciprtion" id="floatingTextarea"></textarea>
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Report Date</label>
                             <input name="report_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Input ReportDate">
                         </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
      
                       </div>

                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                     </div>
                </div>
            </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

@endsection('content')



