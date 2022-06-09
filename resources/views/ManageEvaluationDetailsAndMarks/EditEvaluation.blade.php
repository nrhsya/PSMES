<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Edit Evaluation | PSMES</title>
</head>

@section('content')


        <!-- Page Content  -->
        <div style="margin: 0px 0px; padding:0px 0px;height:90%; background-color: white;">
        <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
    <h2 style="height: 40px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Edit Evaluation Details</h2>

    <form style="width:100%;" action="/evaluationdatadata/{{$evaluation_data->id}}/update" method="POST">
    @csrf
    @method('PUT')
    <center>
    <div style="width: 60%">
    
        <table style="margin-top: 50px">
        <tr style="height: 60px;">
            <td style="width:10%"><label for="exampleFormControlInput2" class="form-label">Student ID</label></td>
            <td style="width:50%"><input name="std_id" type="text" value="{{$evaluation_data->std_id}}" class="form-control" id="exampleFormControlInput2" placeholder="Enter Student Name"></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10% ; margin-left:15px;"><label for="exampleFormControlInput2" class="form-label">Student Name</label></td>
            <td style="width:50%"><input name="std_name" type="text" value="{{$evaluation_data-->std_name}}" class="form-control" id="exampleFormControlInput2" placeholder="Enter Student Name"></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10%; margin-left:15px;"><label for="exampleFormControlInput3" class="form-label">Supervisor Name</label></td>
            <td style="width:50%"><input name="sv_name" type="text" value="{{$evaluation_data-->sv_name}}" class="form-control" id="exampleFormControlInput3" placeholder="Enter Supervisor Name"></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10%; margin-left:15px;"><label for="exampleFormControlInput4" class="form-label">Evaluator Name</label></td>
            <td style="width:50%"><input name="eva_name" type="text" value="{{$evaluation_data->eva_name}}"  class="form-control" id="exampleFormControlInput4" placeholder="Enter Evaluator Name"></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10%; margin-left:15px;"><label for="exampleFormControlInput5" class="form-label">Evaluation Date</label></td>
            <td style="width:50%"><input name="eva_date" type="text" value="{{$evaluation_data->eva_date}}" class="form-control" id="exampleFormControlInput5" placeholder="Enter Evaluation Time"></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10%; margin-left:15px;"><label for="exampleFormControlInput5" class="form-label">Evaluation Time</label></td>
            <td style="width:50%"><input name="eva_time" type="text" value="{{$evaluation_data->eva_time}}" class="form-control" id="exampleFormControlInput5" placeholder="Enter Evaluation Date"></td>
        </tr>
        </table> 

</div>
</center>
    <button style="margin: 40px 45% 80px; padding: 15px 20px;" id="customButton" type="submit" class="btn btn-primary">Edit</button>   
    </form>
</div>
</div>
          

@endsection