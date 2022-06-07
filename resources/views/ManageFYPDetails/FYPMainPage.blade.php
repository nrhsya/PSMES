<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>FYP Details Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div style="margin: 0px 0px; padding:0px 0px;height:100%; background-color: white;">
            <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
          <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 5px 0px; background-color:#11ADA4; text-align: center;">Add New FYP Details</h2>

        <div> <a style="margin: 40px 45% 80px; padding-right:90px; padding-left:90px;" id="customButton" href="/AddFYPDetails"><b>Add</b></a></div>

           <h2 style="border: 2px solid black; color: #FFFFFF; font-size: 18px; padding: 5px 0px; background-color:#11ADA4; text-align: center;">Update FYP Details</h2>
           <div class="row text-center">
            <form type="get" action="{{url('/fypdata/search')}}">
                <input class="form-control mr-sm-2 my-lg-0" name="query" style="border: 5px solid #11ADA4; text-align: center; margin-top: 40px; margin-bottom: 40px;" type="search" placeholder="Enter student ID" size="100" >
                <table style="margin-left:38%;"><tr><div class="row text-center">
                    <td><button style="margin: 40px 45% 80px; padding: 15px 20px;" id="customButton" type="submit" class="btn btn-primary"><b>Search</b></button></td>
                </div></tr>
                </table>
            

            </form></div>
          
@endsection