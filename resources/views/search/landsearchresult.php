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
				@foreach ($lands as $land)
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						@foreach(json_decode($land->images) as $image)
						@if($loop->first)
						<a href="{{ url('/landdetails/{id}',$land->id) }}">
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
										<p><i class="fa fa-user"></i> Tony Holland</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> {{ $land->created_at }} ago</p>
									</div>	
								</div>
							</div>
							<a href="/landdetails" class="room-price"># {{ $land->price }}</a>
						</div>
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

