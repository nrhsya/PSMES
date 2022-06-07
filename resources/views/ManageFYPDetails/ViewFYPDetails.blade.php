<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>View FYP Details | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div style="margin: 0px 0px; padding:0px 0px;height:100%; background-color: white;">
            <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
          <h2 style=" color: #FFFFFF; font-size: 18px; padding: 5px 0px; background-color:#11ADA4; text-align: center;">Student FYP Details</h2>

    <center>
          <form style="width:100%;" action="fypd">
    @foreach($fyp_data as $fypdata)
    <table style="background-color: #11ADA4; border: 5px solid blue; margin-left: 10px; margin-right: 10px; margin-top: 50px; padding-left:300px"> 
    <tr style="height: 60px;">
        <td style="width: 20%; border: 10px solid #11ADA4;"><label>Student ID</label></td>
        <td style="width: 85%; margin-left: 300px;border: 10px solid #11ADA4; padding-left: 50px">{{$fypdata['std_id']}}</td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%;border: 10px solid #11ADA4;"><label>Student Name</label></td>
        <td style="width: 85%: ext-transform: uppercase; border: 10px solid #11ADA4; padding-left: 50px">{{$fypdata['std_name']}}</td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%; border: 10px solid #11ADA4;"><label >Supervisor Name</label></td>
        <td style="width: 85%;border: 10px solid #11ADA4;padding-left: 50px">{{$fypdata['sv_name']}}</td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%;border: 10px solid #11ADA4;"><label>Evaluator Name</label></td>
        <td style="width: 85%;border: 10px solid #11ADA4;padding-left: 50px">{{$fypdata['eva_name']}}</td>
    </tr>
    <tr style="height: 60px;">
        <td style="width:10%;border: 10px solid #11ADA4;"><label>FYP Title</label></td>
        <td style="width: 85%;border: 10px solid #11ADA4;padding-left: 50px">{{$fypdata['fyp_title']}}</td>
    </tr>
    
    </table> 
    @endforeach
    <div>
    <a href="{{ url('fypdata/edit/'.$fypdata['std_id']) }}" class="btn btn-primary">Edit</a>
    <a href="fypdata/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a>
</div>
    </form>
</center>



          
@endsection
