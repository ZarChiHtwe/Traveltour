@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">Car Info</h1>
    </div>
    <div class="col-lg-6 text-right"><a href="{{route('cars.index')}}" class="btn btn-outline-dark"><i class="fas fa-backward" ></i></a>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mt-4 mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Car Info</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>carnumber</th>
              <th>photo</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
             <th>carnumber</th>
             <th>photo</th>
           </tr>
         </tfoot>
         <tbody>
          <tr>            
            <td>{{$car->carnumber}}</td>
            @php
            $photo=json_decode($car->photo);
            @endphp
            <td>
              @foreach($photo as $photos)
              <img src="{{asset($photos)}}" width="120px">
              @endforeach
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection