@extends('backend.master')
@section('content')



<div class="container-fluid">

          <div class="row">
            <div class="col-lg-6">
              <h1 class="h3 mb-2 text-gray-800">CarType</h1>
            </div>
            <div class="col-lg-6 text-right"><button class="btn btn-outline-dark ml-auto"><a href="{{route('cartypes.create')}}"><i class="fas fa-plus" ></i></a></button></div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">CarType List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>No</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach($cartypes as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->price}}</td>
                      <td>
                        <a href="{{route('cartypes.edit',$row->id)}}"  class="btn btn-warning" >Edit</a>
                         <form action="{{route('cartypes.destroy',$row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
                          @csrf
                          @method('DELETE')

                           <input type="submit"  name="btnsubmit" value="DELETE" class="btn btn-danger">

                         </form>
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