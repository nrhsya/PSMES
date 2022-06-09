<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>FYP Details Mainpage | PSMES</title>
</head>

@section('content')

@if(session('success'))
        <div class="alert alert-primary" role="alert">
             {{session('success')}}
        </div>
        @endif 

        @if ($errors->any())
    <div class="alert alert-primary" role="alert">
     
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
@endif

    <!-- Page Content  -->
    <div style="margin: 0px 0px; padding:0px 0px;height:90%; background-color: white;">
        <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
        <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Add Student FYP Details</h2>

        <center><a style="margin: 40px 0px 80px; padding-right:90px; padding-left:90px;" id="customButton" href="/AddFYPDetails"><b>Add</b></a><center>

        <h2 style="height: 50px; color: #FFFFFF; margin-bottom: 100px; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Update FYP Details</h2>
           
        <div>

        <form type="get" action="{{url('/fypdata/search')}}">
            
            <center><h style="font-size: 20px;" >Student ID : </h><br><br><input class="form-control mr-sm-2 my-lg-0" name="query" style="border: 5px solid #11ADA4;  width: 50%; text-align: center;" type="search" required="required" placeholder="Enter student ID" size="100" ><center>
            
            <table>
                <tr>
                <center><td><button style="margin: 40px 0px 50px; padding-right:80px; padding-left:80px;" id="customButton" type="submit" class="btn btn-primary"><b>Search</b></button></td><center>
                </tr>
            </table>
            

        </form>
        </div>

        </div>
    </div>
          
@endsection