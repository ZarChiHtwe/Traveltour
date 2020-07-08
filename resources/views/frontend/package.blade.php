@extends('frontend.master')
@section('content')

<div class="breadcrumb breadcrumb_bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb_iner">
					<div class="breadcrumb_iner_item text-center">
						<h2>Packages</h2>
						<p>home . Packages</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popular_places_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					@foreach($packages as $row)
					<div class="col-lg-4 col-md-6">
						<div class="single_place">
							<div class="thumb">
								<img src="{{asset($row->photo)}}" alt="" style="width: 100%; height: 300px;">
								<a href="{{route('packagedetail',$row->id)}}" class="prise">{{$row->totalprice}} Ks</a>
							</div>
							<div class="place_info">
								<a href="{{route('packagedetail',$row->id)}}"><h3>{{$row->name}}</h3></a>
								<div class="rating_days d-flex justify-content-between">
									<span class="d-flex justify-content-center align-items-center">
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i>
										<a href="#">(20 Review)</a>
									</span>
									<div class="days">
										<i class="fas fa-clock-o"></i>
										<a href="{{route('packagedetail',$row->id)}}">{{$row->duration}} Days</a>
									</div>
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