@extends('ReportModule\master')

@section('content')
<!-- Kalaivani A/P Ramani-->
<!-- CB19063-->


@if(session('success'))
<div class="alert alert-primary" role="alert">
     {{session('success')}}
</div>
@endif

<h1 style="text-align:center ; position:left">Edit Report</h1>
<hr><br>

<div class="container">

<div class="row jsutify-content-md-right ">
<div class="col-lg-6">
   <form action="/reportdata/{{$data_report->id}}/update" method="POST">
       {{csrf_field()}}
       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Coordinator Name</label>
            <input name="coord_name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_report->coord_name}}">
       </div>

       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Desciprtion</label>
             <textarea name="description" class="form-control" placeholder="Desciprtion" id="floatingTextarea">{{$data_report->description}}></textarea>
        </div>
       
       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"> Report Date</label>
            <input name="report_date" type="date" class="form-control" id="exampleFormControlInput1" value="{{$data_report->report_date}}">
       </div><br>
            <button type="submit" class="btn btn-primary">Save</button>
   </form>
</div>  
</div>

</div>


@endsection