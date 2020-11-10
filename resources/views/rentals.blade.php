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
		<h2>Rentals Listings</h2>
	</div>
</section>
<!--  Page top end -->

<!-- Breadcrumb -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="/"><i class="fa fa-home"></i>Home</a>
		<span><i class="fa fa-angle-right"></i>Rentals Listings</span>
	</div>
</div>


<!-- Filter form section -->
<!-- <div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="/searchhouse" method="GET" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select name="rentsale" class="search_form_select">
											<option disabled selected>Home</option>
											<option>Rent</option>
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
									<div>
										<select name="bedrooms" class="search_form_select">
											<option disabled selected>Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
									<div>
										<select name="bathrooms" class="search_form_select">
											<option disabled selected>Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
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
			@if (count($rents)===0)
			<h5> There are no data for this page</h5>
			@endif
			@foreach ($rents as $rent)
			<div class="col-lg-4 col-md-6">
				<!-- feature -->
				<div class="feature-item">

					@foreach(json_decode($rent->images) as $image)
					@if($loop->first)
					<a href="{{ url('/rentalsdetails',$rent->id) }}">
						<div class="feature-pic set-bg-prop" style="background-image: url({{url('assets/img/house',$image)}});">
							<div class="rent-notic">FOR {{ $rent->rentsale }}</div>
						</div>
					</a>
					@endif
					@endforeach
					<div class="feature-text">
						<div class="text-center feature-title">
							<h5> {{ $rent->address }}</h5>
							<p><i class="fa fa-map-marker"></i> {{ $rent->city }}</p>
						</div>
						<div class="room-info-warp">
							<div class="room-info">
								<div class="rf-left">
									<p><i class="fa fa-bed"></i> {{ $rent->bedrooms }} Bedrooms</p>
								</div>
								<div class="rf-right">
									<p><i class="fa fa-bath"></i> {{ $rent->bathrooms }} Bathrooms</p>
								</div>
							</div>
							<div class="room-info">
								<!-- <div class="rf-left">
										<p><i class="fa fa-user"></i> Tony Holland</p>
									</div> -->
								<div class="rf-left">
									<p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($rent->created_at)->format('d/m/Y') }}</p>
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
												<form method="post"  action="/rentals/send">
													{{ csrf_field() }}
														<h4 class="text-center">Request now</h4>
												<div class="modal-body">
													<div class="form-group">
													<input name="propaddress" class="form-control-req" value="{{ $rent->address }}" readonly>
													<input name="propprice" class="form-control-req" value="# {{number_format($rent->price, 2)}}" readonly>
													<input name="propdesc" class="form-control-req" value="{{ $rent->description }}" readonly>
													<input name="proplocation" class="form-control-req" value="{{ $rent->city }}" readonly>
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
						<a href="{{ url('/rentalsdetails',$rent->id) }}" class="room-price"># {{number_format($rent->price, 2)}}</a>
					</div>
				</div>
			</div>
			@endforeach

		</div>
		<div class="site-pagination">
			{{ $rents->links() }}
		</div>
	</div>
</section>
<!-- page end -->

@endsection


@section('footer')
@endsection
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ecfdf3798597522"></script>
