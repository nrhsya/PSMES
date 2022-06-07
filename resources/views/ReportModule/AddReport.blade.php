<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

@section('content')
<!-- Kalaivani A/P Ramani-->
<!-- CB19063-->


@if(session('success'))
<div class="alert alert-primary" role="alert">
     {{session('success')}}
</div>
@endif

<div >
      <div style="margin-top: 15px; padding:10px 16px; height: 700px; background-color: #F5F5F5;">
          
     <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 12px 0px; background-color:#11ADA4; text-align: center;">Add Report Details</h2><br><br>

     <center>

    <form style="width:100%;" action="/reportdata/create" method="POST" class="form-group">
    {{csrf_field()}}  

    <table style="margin-left: 100px; margin-top: 100px">
    <tr>
    <td style="width:20%" ><label for="exampleFormControlInput3" class="form-label" >Coordinator Name :</label></td>
        <td><select name="coord_name" class="form-select" aria-label="coord_name">
                <option selected>Coordinator Name</option>
                <option value="Dr.Danakorn Nincarean">Dr.Danakorn Nincarean</option>                                                 
            </select><br></td>
    </tr>

    <tr>
        <td style="width:20%"><label for="exampleFormControlInput2" class="form-label">Description :</label></td>
        <td style="width:85%"><textarea name="description" class="form-control" placeholder="Description" id="floatingTextarea"></textarea></td>
    </tr>

    <tr style="height: 60px;">
        <td style="width:20%"><label for="exampleFormControlInput3" class="form-label">Report:</label></td>
        <td style="width:85%"> <input name="report_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Input ReportDate"></td>
    </tr>

    </table> 
    
    <button style="margin: 40px 45% 80px; padding: 15px 20px;" id="mycustomButton" type="submit" class="btn btn-primary">Submit</button>   
    </form>

</div>
</div>
</div>
</center>
@endsection