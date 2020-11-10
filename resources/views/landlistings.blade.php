@extends('layouts.mainapp')

@section('content')
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
	
	@section('header')
	@endsection
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" style="background-image: url(assets/img/page-top-bg.jpg);">
		<div class="container text-white">
			<h2>Land Listings</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Land Listings</span>
		</div>
	</div>


	<!-- Filter form section -->
	<!-- <div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="/searchland" method="GET" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select name="leasesale" class="search_form_select">
											<option disabled selected>Land</option>
											<option>Lease</option>
											<option>Sale</option>
										</select>
									</div>
									<div>
										<select name="city" class="search_form_select">
											<option disabled selected>City</option>
											<option>Maryland</option>
											<option>Victoria Island</option>
											<option>Port-Hacourt</option>
										</select>
									</div>
									<div>
										<select name="type" class="search_form_select">
											<option disabled selected>Type</option>
											<option>Commercial</option>
											<option>Residential</option>
										</select>
									</div>
									<div class="col-md-3">
										<input name="size" type="number" placeholder="sqm" step=".01">
									</div>
									<div class="col-md-3">
										<input name="price" type="number" placeholder="Price">
									</div>
								</div>
								<button name="submit" class="search_form_button ml-auto">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Filter form section end -->


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
				@if (count($lands)===0)
					<h5> There are no data for this page</h5>
				@endif
				@foreach ($lands as $land)
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						@foreach(json_decode($land->images) as $image)
						@if($loop->first)
						<a href="{{ url('/landdetails',$land->id) }}">
						<div class="feature-pic set-bg-prop" style="background-image: url({{url('assets/img/land',$image)}});">
							<div class="sale-notic">FOR {{ $land->leasesale }}</div>
						</div></a>
						@endif
						@endforeach

						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>{{ $land->address }}</h5>
								<p><i class="fa fa-map-marker"></i> {{ $land->city }}</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> {{ $land->city }}</p>
										
									</div>
									<div class="rf-right">
										<p><i class="fa fa-file"></i> C OF O</p>
									</div>	
								</div>
								<div class="room-info">
									
									<div class="rf-left">
										<p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($land->created_at)->format('d/m/Y') }}</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="social-share">
									<a href="https//facebook.com/phenixproperties"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="https//instagram.com/phoenix_properties"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
								</div>
								<div class="room-info">
										<div class="panel-body">
												<button class="btn more-req" data-toggle="modal" data-target="#myModal">
													Request
												</button>
												<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																
															</div>
															<form method="post"  action="/landlistings/send">
																{{ csrf_field() }}
																	<h4 class="text-center">Request now</h4>
															<div class="modal-body">
																<div class="form-group">
																<input name="propaddress" class="form-control-req" value="{{ $land->address }}" readonly>
																<input name="propprice" class="form-control-req" value="# {{number_format($land->price, 2)}}" readonly>
																<input name="propdesc" class="form-control-req" value="{{ $land->description }}" readonly>
																<input name="proplocation" class="form-control-req" value="{{ $land->city }}" readonly>
																</div>
															</div>
															<div class="modal-body text-center">
																<h3>Book for inspections by calling:</h3>
																<h5>08024974537</h5>
															</div>
															<div class="modal-body">
																<div class="form-group">
																<label>Name</label>
																<input name="name" type="text" class="form-control" placeholder="Enter Fullname" required>
																</div>
															</div>
															<div class="modal-body">
																<div class="form-group">
																<label>Email</label>
																<input name="email" type="email" class="form-control" placeholder="Enter Subject">
																</div>
															</div>
															<div class="modal-body">
															<div class="form-group">
																<label>Phone Number</label>
																<input name="number" type="number" class="form-control" placeholder="Phone Number" required>
															</div>
															</div>
															<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<input type="submit" name="log" value="Send" class="btn btn-primary">
															</div>
															</form>
																
														</div>
													</div>
											</div>
										</div>
									</div>
							</div>
							<a href="{{ url('/landdetails',$land->id) }}" class="room-price"># {{number_format($land->price, 2)}}</a>						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="site-pagination">
				{{ $lands->links() }}
			</div>
		</div>
	</section>
	<!-- page end -->

	@endsection


@section('footer')
@endsection

