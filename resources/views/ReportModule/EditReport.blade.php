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
          
     <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 12px 0px; background-color:#11ADA4; text-align: center;">Edit Report</h2>
<center>
    <form style="width:100%;" action="/reportdata/{{$data_report->id}}/update" method="POST" class="form-group">
    {{csrf_field()}}  

    <table style="margin-left: 200px; margin-top: 100px">
    <tr>
        <td style="width:20%;" ><label for="exampleFormControlInput1" class="form-label">Coordinator Name :</label></td>
        <td><input style="width:80%;" name="coord_name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_report->coord_name}}"></td>
    </tr>

    <tr style="height: 60px;">
        <td style="width:20%"><label for="exampleFormControlInput2" class="form-label">Description :</label></td>
        <td style="width:85%"><input style="width:80%;" name="description" type="text" class="form-control" id="exampleFormControlInput2" value="{{$data_report->description}}"></td>
    </tr>

    <tr style="height: 60px;">
        <td style="width:20%"><label for="exampleFormControlInput3" class="form-label">Report :</label></td>
        <td style="width:85%"><input style="width:80%; " name="report_date" type="date" class="form-control" id="exampleFormControlInput3" value="{{$data_report->report_date}}"></td>
    </tr>

    </table> 

    <button style="margin: 40px 45% 80px; padding: 15px 20px;" id="mycustomButton" type="submit" class="btn btn-primary">Save</button>   
    </form>
</div>
</div>
</div>

@endsection