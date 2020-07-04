@extends('backend.master')
@section('content')



<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6">
      <h1 class="h3 mb-2 text-gray-800">TravelRoute</h1>
    </div>
    <div class="col-lg-6 text-right"><a href="{{route('travelroutes.create')}}" class="btn btn-outline-dark"><i class="fas fa-plus" ></i></a>
    </div>
  </div>


  <!-- DataTales Example -->
  <div class="card shadow mt-4 mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">TravelRoute List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Placeform</th>
              <th>Placeto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
             <th>No</th>
              <th>Placeform</th>
              <th>Placeto</th>
              <th>Action</th>
           </tr>
         </tfoot>
         <tbody>
          @php $i=1; @endphp
          @foreach($travelroutes as $row)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$row->placefrom_id}}</td>
            <td>{{$row->placeto_id}}</td>
            <td>
              <a href="{{route('travelroutes.edit',$row->id)}}"  class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
              <form action="{{route('travelroutes.destroy',$row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
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