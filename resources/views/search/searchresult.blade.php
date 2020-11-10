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
			<h2>Search Result</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Search Result</span>
		</div>
	</div>


	<!-- Filter form section -->
	<div class="home_search">
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
	</div>
	<!-- Filter form section end -->


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
				@if (session()->has('success_message'))
						<div class="alert alert-success">
							{{ session()->get('success_message') }}
						</div>
						@endif
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
				<p>{{ $houses->count() }} result(s) '{{ request()->input('query') }}'</p>
				@foreach ($houses as $house)
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						@foreach(json_decode($house->images) as $image)
						@if($loop->first)
						<a href="{{ url('/listingsdetails',$house->id) }}">
						<div class="feature-pic set-bg-prop" style="background-image: url({{url('assets/img/house',$image)}});">
							<div class="sale-notic">FOR {{ $house->rentsale }}</div>
						</div></a>
						@endif
						@endforeach
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>{{ $house->city }}</h5>
								<p><i class="fa fa-map-marker"></i> {{ $house->address }}</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> {{ $house->size }}</p>
										<p><i class="fa fa-bed"></i> {{ $house->bedrooms }} Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> {{ $house->parking }} Parking Lot</p>
										<p><i class="fa fa-bath"></i> {{ $house->bathrooms }} Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Tony Holland</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="social-share">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<a href="/landdetails" class="room-price"># {{ $house->price }}</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="site-pagination">
				{{ $houses->links() }}
			</div>
		</div>
	</section>
	<!-- page end -->

	@endsection


@section('footer')
@endsection

