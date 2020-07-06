@extends('backend.master')
@section('content')



<div class="container-fluid">

          <div class="row">
            <div class="col-lg-6">
              <h1 class="h3 mb-2 text-gray-800">User</h1>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mt-4 mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach($users as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->address}}</td>
                      <td>{{$row->phone}}</td>
                    </tr>
                    @endforeach
                     
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection