@extends('evaluator.dashboard')

<head>
    <title> Reminder | PSMES</title>
</head>

@section('content')

 <!-- Page Content  -->
 <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Reminder</b></h1>
        </div>

        <div class="container text-center font-weight-bold mt-2">
            <!-- to alert the users -->
            @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
            @endif
        </div>
        
        <div style="padding:10px;">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-hover" style="LINE-HEIGHT:35px;" width="100%">
                    <tr style="background-color:#0958A3;color:white;">
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                    @foreach($ as $)
                    <tr style="background-color:white;color:#0958A3;">
                        

                        <td>{{$->reminder_id}}</td>
                        <td>{{$->reminder_title}}</td>
                        <td>{{$->reminder_description}}</td>
                        <td>{{$->reminder_date}}</td>
                    </tr>
                    @endforeach
                </table><br><br>
            </div>

            <a class="mt-5" class="customButton" href="generateTop" onclick="generateTop20()"><b>Generate Top 20 Students</b></a>
        </div>
    </div>
   
@endsection