@extends('backend.master')
@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">Booking Detail</h1>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mt-4 mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Booking Detail List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>VoucherNo</th>
              <th>Travel Route</th>
              <th>Customer</th>
              <th>Phone Number</th>
              <th>Date</th>
              <th>NumberofPeople</th>
              <th>GrandTotal</th>
              <th>Hotel</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>VoucherNo</th>
              <th>Travel Route</th>
              <th>Customer</th>
              <th>Phone Number</th>
              <th>Date</th>
              <th>NumberofPeople</th>
              <th>GrandTotal</th>
              <th>Hotel</th>
            </tr>
         </tfoot>
         <tbody>
          @php $i=1; @endphp
          <tr>
            <td>{{$i++}}</td>
            <td>{{$booking->voucherno}}</td>
            <td>{{$booking->packages->name}}</td>
            <td>{{$booking->users->name}}</td>
            <td>{{$booking->users->phone}}</td>
            <td>{{$booking->bookingdate}}</td>
            <td>{{$booking->numberofpeople}}</td>
            <td>{{$booking->grandtotal}}</td>
            <td>{{$booking->packages->hotels->name}}</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection