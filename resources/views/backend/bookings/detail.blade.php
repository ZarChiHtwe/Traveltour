@extends('backend.master')
@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">Booking Detail</h1>
    </div>
    <div class="col-lg-6 text-right"><a href="{{route('bookings.index')}}" class="btn btn-outline-dark"><i class="fas fa-backward" ></i></a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mt-4 mb-4" style="width: 100%;">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Booking Detail List</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-12">
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card" width="100%">
              <img src="{{asset($booking->packages->photo)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">{{$booking->packages->name}}</h3>
                <p class="card-text">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      VoucherNo: {{$booking->voucherno}}<br><br>
                      DepatureDate: {{$booking->packages->depaturedate}}<br><br>
                      DepatureTime: {{$booking->packages->depaturetime}}<br><br>
                      CarNumber: {{$booking->packages->cars->carnumber}}<br><br>
                      Hotel: {{$booking->packages->hotels->name}}<br><br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      Customer: {{$booking->users->name}}<br><br>
                      PhoneNumber: {{$booking->users->phone}}<br><br>
                      Email: {{$booking->users->email}}<br><br>
                      NumberOfPeople: {{$booking->numberofpeople}} peoples<br><br>
                      GrandTotal: {{$booking->grandtotal}} Ks
                    </div>
                  </div>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12">
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection