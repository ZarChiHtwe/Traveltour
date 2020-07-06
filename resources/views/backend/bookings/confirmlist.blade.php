@extends('backend.master')
@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">Booking</h1>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mt-4 mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Booking Confirm List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Customer</th>
              <th>Date</th>
              <th>VoucherNo</th>
              <th>NumberofPeople</th>
              <th>GrandTotal</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Customer</th>
              <th>Date</th>
              <th>VoucherNo</th>
              <th>NumberofPeople</th>
              <th>GrandTotal</th>
              <th>status</th>
              <th>Action</th>
           </tr>
         </tfoot>
         <tbody>
          @php $i=1; @endphp
          @foreach($bookings as $row)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$row->users->name}}</td>
            <td>{{$row->bookingdate}}</td>
            <td>{{$row->voucherno}}</td>
            <td>{{$row->numberofpeople}}</td>
            <td>{{$row->grandtotal}}</td>
            <td>{{$row->status}}</td>
            <td>
              <a href="{{route('bookings.show',$row->id)}}"  class="btn btn-outline-info"><i class="fas fa-info"></i></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection