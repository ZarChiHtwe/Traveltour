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
							<div class="col-lg-12 col-md-12 col-sm-12 mt-1">
								<figure class="snip1584"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample119.jpg" alt="sample119"/>
									<figcaption>
										<h3>Nigel Nigel</h3>
									</figcaption>
								</figure>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 mt-1">
								<figure class="snip1584"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample119.jpg" alt="sample119"/>
									<figcaption>
										<h3>Nigel Nigel</h3>
									</figcaption>
								</figure>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 mt-1">
								<figure class="snip1584"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample119.jpg" alt="sample119"/>
									<figcaption>
										<h3>Nigel Nigel</h3>
									</figcaption>
								</figure>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 mt-1">
								<figure class="snip1584"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample119.jpg" alt="sample119"/>
									<figcaption>
										<h3>Nigel Nigel</h3>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
								<h4>Package List:</h4>
							</div>
							@foreach($packages as $row)
								<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
								<div class="card">
									<a href="{{route('packagedetail',$row->id)}}"><img class="card-img-top" src="{{asset($row->photo)}}" alt="Card image cap"></a>
									<div class="text-block"><a href="">{{$row->totalprice}}Ks</a></div>
									<div class="card-body">
										<a href="{{route('packagedetail',$row->id)}}"><h5 class="card-title">{{$row->name}}</h5></a>
										<p class="card-text">Deapture Date: {{$row->depaturedate}}</p>
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-8">
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4"><i class="far fa-clock"></i> {{$row->depaturetime}}</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
								<div class="card">
									<a href=""><img class="card-img-top" src="image/inlay.jpg" alt="Card image cap"></a>
									<div class="text-block"><a href="">25000Ks</a></div>
									<div class="card-body">
										<a href=""><h5 class="card-title">Inlay</h5></a>
										<p class="card-text">Deapture Date: </p>
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-8">
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4"><i class="far fa-clock"></i> 5 Days</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
								<div class="card">
									<img class="card-img-top" src="image/inlay.jpg" alt="Card image cap">
									<div class="text-block">25000Ks</div>
									<div class="card-body">
										<h5 class="card-title">Inlay</h5>
										<p class="card-text">Deapture Date: </p>
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-8">
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4"><i class="far fa-clock"></i> 5 Days</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection