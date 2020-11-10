@extends('layouts.mainapp')

@section('content')
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	@section('header')
	@stop


	<!-- Hero section -->
	<!-- <section class="hero-section set-bg" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.3)),url(assets/img/header-bg.jpg);">
		<div class="container hero-text text-white">
			<h1 style="font-family: 'Permanent Marker', cursive;">PHOENIX GLOBAL</h1>
			<h3 style="font-family: 'Permanent Marker', cursive;">PROPERTIES.</h3>
			<p style="font-family: 'Dancing Script', cursive;">dreams, comfort and legacy.</p>
			<a href="/about" class="site-btn">VIEW MORE</a>
		</div>
	</section> -->
	<!-- Hero section end -->
	<section class="hero-section mt-5">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img class="d-block w-100" src="{{ url ('assets/img/banner/bn1.jpg') }}" alt="First slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="{{ url ('assets/img/banner/bn2.jpg') }}" alt="Second slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="{{ url ('assets/img/banner/bn3.jpg') }}" alt="Third slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="{{ url ('assets/img/banner/bn4.jpg') }}" alt="Third slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="{{ url ('assets/img/banner/bn5.jpg') }}" alt="Third slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="{{ url ('assets/img/banner/bn6.jpg') }}" alt="Third slide">
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</section>



	<!-- Properties section -->
	<!-- <section class="properties-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3 style="font-family: 'Permanent Marker', cursive;">RECENT PROPERTIES</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="propertie-item set-bg-prop" style="background-image: url(assets/img/propertie/1.jpg);">
						<div class="sale-notic">FOR SALE</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>176 Kingsberry, Dr Anderson</h5>
								<p><i class="fa fa-map-marker"></i> Rochester, NY 14626</p>
							</div>
							<div class="price">#1,777,000</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="propertie-item set-bg-prop" style="background-image: url(assets/img/propertie/2.jpg);">
						<div class="rent-notic">FOR Rent</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>45 Lianne Dr, Greece Street</h5>
								<p><i class="fa fa-map-marker"></i> Tasley, VA 23441</p>
							</div>
							<div class="price">#12,550,000/month</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="propertie-item set-bg-prop" style="background-image: url(assets/img/propertie/3.jpg);">
						<div class="sale-notic">FOR SALE</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>6101 Aqua Ave Apt 603</h5>
								<p><i class="fa fa-map-marker"></i> Miami Beach, FL 33141</p>
							</div>
							<div class="price">#150,000</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="propertie-item set-bg-prop" style="background-image: url(assets/img/propertie/4.jpg);">
						<div class="rent-notic">FOR Rent</div>
						<div class="propertie-info text-white">
							<div class="info-warp">
								<h5>339 N Oakhurst Dr Apt 303</h5>
								<p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
							</div>
							<div class="price">#30,000,000/month</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Properties section end -->


	<!-- Services section -->
	<!-- <section class="services-section spad set-bg" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url(assets/img/service-bg.png);">
		<div class="container">
			<div class="row">
					<div class="section-title text-center text-white">
						<h3 class="text-center" style="font-family: 'Permanent Marker', cursive;">OUR SERVICES</h3>
						<p class="text-center">We provide the perfect service for </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Tenancy Facilitation</h5>
								<p>We provide our clients with adequate background checks and complete profile of the most suitable tenants for their properties and ensure they meet our clients’ requirements and specification.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Property Sales and Acquisition</h5>
								<p>We are committed to helping our clients get great deals for their properties guided by their specific instructions to that effect. We constantly deploy winning strategies for all our clients, specifically tailored to meet their needs.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Facility Management and Building Maintenance</h5>
								<p>We ensure accountability and provide solid maintenance management principles, processes and systems aimed at ensuring that our clients’ facility are in great and tenantable state at all times.</p>
							</div>
						</div>

						<a href="/about" class="site-btn-news">VIEW MORE</a>
					</div>
			</div>
		</div>
	</section> -->
	<!-- Services section end -->


	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3 style="font-family: 'Nanum Gothic', sans-serif;">Home Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row">
				@if (count($homes)===0)
					<h5> There are no data for this page</h5>
				@endif
				@foreach ($homes as $home)
					<div class="col-lg-4 col-md-6">
						<!-- feature -->
						<div class="feature-item">

							@foreach(json_decode($home->images) as $image)
								@if($loop->first)
								<a href="{{$home->rentsale == 'sales'?url('/listingsdetails',$home->id):url('/rentalsdetails',$home->id) }}">
								<div class="feature-pic set-bg-prop" style="background-image: url({{url('assets/img/house',$image)}});">
									<div class="{{$home->rentsale == 'sales'?'sale-notic':'rent-notic'}}">FOR {{ $home->rentsale }}</div>
								</div></a>
								@endif
							@endforeach
							<div class="feature-text">
								<div class="text-center feature-title">
									<h5> {{ $home->address }}</h5>
									<p><i class="fa fa-map-marker"></i> {{ $home->city }}</p>
								</div>
								<div class="room-info-warp">
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-bed"></i> {{ $home->bedrooms }} Bedrooms</p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-bath"></i> {{ $home->bathrooms }} Bathrooms</p>
										</div>
									</div>
									<div class="room-info">
										<!-- <div class="rf-left">
											<p><i class="fa fa-user"></i> Tony Holland</p>
										</div> -->
										<div class="rf-left">
											<p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($home->created_at)->format('l j F Y') }}</p>
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
										<div class="rf-left">
											<a class="btn more-req" href="{{$home->rentsale == 'sales'?'/listings':'/rentals'}}">More</a>
										</div>
										<div class="rf-right">
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
															<form method="post"  action="/send">
																{{ csrf_field() }}
																	<h4 class="text-center">Request now</h4>
															<div class="modal-body">
																<div class="form-group">
																<input name="propaddress" class="form-control-req" value="{{ $home->address }}" readonly>
																<input name="propprice" class="form-control-req" value="# {{number_format($home->price, 2)}}" readonly>
																<input name="propdesc" class="form-control-req" value="{{ $home->description }}" readonly>
																<input name="proplocation" class="form-control-req" value="{{ $home->city }}" readonly>
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
								</div>
								</div>
								<a href="{{$home->rentsale == 'sales'?url('/listingsdetails',$home->id):url('/rentalsdetails',$home->id) }}" class="room-price"># {{number_format($home->price, 2)}}</a>
							</div>
					</div>
				@endforeach

			</div>
		</div>
	</section>

	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3 style="font-family: 'Nanum Gothic', sans-serif;">Land Listings</h3>
				<p>Browse Land for sales and Lease</p>
			</div>
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
									<div class="rf-left">
									<a class="btn more-req" href="/landlistings">More</a>
									</div>
									<div class="rf-right">
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
														<form method="post"  action="/send">
																{{ csrf_field() }}
																<h4 class="text-center">Request now</h4>
																<div class="modal-body">
																	<div class="form-group">
																	<input name="propaddress" class="form-control-req" value="{{ $home->address }}" readonly>
																	<input name="propprice" class="form-control-req" value="# {{number_format($home->price, 2)}}" readonly>
																	<input name="propdesc" class="form-control-req" value="{{ $home->description }}" readonly>
																	<input name="proplocation" class="form-control-req" value="{{ $home->city }}" readonly>
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
							</div>
							<a href="{{ url('/landdetails',$land->id) }}" class="room-price"># {{number_format($land->price, 2)}}</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
	</section>
	<!-- feature section end -->



	<!-- Services section -->
	<section class="services-section spad mb-2" style="background-color: #39393c;">
		<div class="container">
		<div class="section-title text-white text-center">
						<h3>OUR SERVICES</h3>
						<p>At Phoenix Global Properties we offer a wide range of services which are aimed at addressing some of the needs of the industry. Our services are tailored to meet their various needs such as… </p>
					</div>
			<div class="row">

			<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Tenancy Facilitation</h5>
								<p>We provide our clients with adequate background checks and complete profile of the most suitable tenants for their properties and ensure they meet our clients’ requirements and specification.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Property Sales and Acquisition</h5>
								<p>We are committed to helping our clients get great deals for their properties guided by their specific instructions to that effect. We constantly deploy winning strategies for all our clients, specifically tailored to meet their needs.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Facility Management and Building Maintenance</h5>
								<p>We ensure accountability and provide solid maintenance management principles, processes and systems aimed at ensuring that our clients’ facility are in great and tenantable state at all times.</p>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Property Listings and Leasing</h5>
								<p>This is a platform created to represent our clients’ interests in their bid to either sell or let their properties which could either be through ‘Open’ or ‘Private exclusive listings’.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Consultancy and Advisory Services</h5>
								<p>Our consultancy and advisory services are tailored specifically to meet our clients’ unique needs at every point in time, there by ensuring that their assets continue to appreciate.</p>
								<p>These services have been carefully developed to ensure that all our clients’ basic needs are adequately catered for by seasoned and well trained professionals whose commitments are selfless to the needs of our clientele.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->










@endsection


@section('footer')
@endsection

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ecfdf3798597522"></script>
