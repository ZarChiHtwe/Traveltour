@extends('frontend.master')
@section('content')

<div class="body">
  <div class="container-fluid banner">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h2 class="text-center">Package Selection</h2>
      </div>
    </div>
  </div>
  <div class="container packagelist">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
            <h5>Popular Travel List:</h5>
          </div>
          @foreach($popular as $prow)
          <div class="col-lg-12 col-md-12 col-sm-12 mt-1">
            <figure class="snip1584"><img src="{{asset($prow->photo)}}" alt="sample119"/>
              <figcaption>
                <h3>{{$prow->name}}</h3>
              </figcaption>
            </figure>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
            <h4>Package List:</h4>
          </div>
          @foreach($custompackage as $row)
          <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
            <div class="card">
              <a href="{{route('packagedetail',$row->id)}}"><img class="card-img-top" src="{{asset($row->photo)}}" style="width: 100%; height: 250px;" alt="Card image cap"></a>
              <div class="text-block"><a href="">{{$row->totalprice}}Ks</a></div>
              <div class="card-body">
                <a href="{{route('packagedetail',$row->id)}}"><h5 class="card-title">{{$row->name}}</h5></a>
                <p class="card-text">Deapture Date: {{$row->depaturedate}}</p>
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8">
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4"><i class="far fa-clock"></i> {{$row->duration}} Days</div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection