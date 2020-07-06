@extends('backend.master')
@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">Package</h1>
    </div>
    <div class="col-lg-6 text-right"><a href="{{route('packages.create')}}" class="btn btn-outline-dark"><i class="fas fa-plus" ></i></a>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mt-4 mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Package List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>name</th>
              <th>duration</th>
              <th>depaturedate</th>
              <th>depaturetime</th>
              <th>totalprice</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
             <th>No</th>
              <th>name</th>
              <th>duration</th>
              <th>depaturedate</th>
              <th>depaturetime</th>
              <th>totalprice</th>
              <th>Action</th>
           </tr>
         </tfoot>
         <tbody>
          @php $i=1; @endphp
          @foreach($packages as $row)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->duration}}</td>
            <td>{{$row->depaturedate}}</td>
            <td>{{$row->depaturetime}}</td>
            <td>{{$row->totalprice}}</td>
            <td>
              <a href="{{route('packages.edit',$row->id)}}"  class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

              <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal{{$row->id}}">
                          <i class="fas fa-info"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$row->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                    <img src="{{asset($row->photo)}}" width="200px"><br><br>
                                  </div>
                                </div>
                                <p>Description: {!! $row->description !!}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>


              <form action="{{route('packages.destroy',$row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
                @csrf
                @method('DELETE')
                <input type="submit"  name="btnsubmit" value="DELETE" class="btn btn-outline-danger">

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