@extends('layouts.mainapp')

@section('content')
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
	
	@section('header')
	@stop


<!-- Page top section -->
<section class="page-top-section" style="background-image: url({{ url ('assets/img/page-top-bg.jpg') }});">
	<div class="container text-white">
		<h2>Property Details</h2>
	</div>
</section>
<!--  Page top end -->

<!-- Breadcrumb -->
<div class="site-breadcrumb">
	<div class="container">
		<a href="/"><i class="fa fa-home"></i>Home</a>
		<a href="/rentals"><i class="fa fa-angle-right"></i>Rentals Listings</a>
		<span><i class="fa fa-angle-right"></i>Property Details</span>
	</div>
</div>



<!-- Page -->

<section class="page-section">
	<div class="container">
		<div class="row">
			@if ($rents)
			<div class="col-lg-8 single-list-page">
				<form class="contact-form">
					<div class="single-list-slider owl-carousel" id="sl-slider">
						@foreach(json_decode($rents->images) as $image)
						<a href="{{url('assets/img/house',$image)}}" data-lightbox="mygallery" data-title="{{ $rents->rentsale }}">
							<div class="sl-item set-bg-prop" style="background-image: url({{url('assets/img/house',$image)}});">
								<div class="sale-notic">FOR {{ $rents->rentsale }}</div>
							</div>
						</a>
						@endforeach
					</div>
					
					<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
						@foreach(json_decode($rents->images) as $image)
							<div class="sl-thumb set-bg-prop" style="background-image: url({{url('assets/img/house',$image)}});"></div>
						@endforeach
					</div>
					<div class="single-list-content">
						<div class="row">
							<div class="col-xl-8 sl-title">
								<h2> {{ $rents->address }}</h2>
								<p><i class="fa fa-map-marker"></i> {{ $rents->city }}</p>
							</div>
							<div class="col-xl-4">
								<div class="price-btn"> # {{number_format($rents->price, 2)}}</div>
							</div>
						</div>
						<h3 class="sl-sp-title">Property Details</h3>
						<div class="row property-details-list">
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-bed"></i> {{ $rents->bedrooms }} Bedrooms</p>
								
							</div>
							
							<div class="col-md-4">
								<p><i class="fa fa-bath"></i> {{ $rents->bathrooms }} Bathrooms</p>
								<!-- <p><i class="fa fa-user"></i> Gina Wesley</p> -->
							</div>
							<div class="col-md-4 col-sm-6">
								<p><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($rents->created_at)->format('d/m/Y') }} </p>
							</div>
						</div>
						<h3 class="sl-sp-title">Description</h3>
						<div class="description">
							<p>{{ $rents->description }}</p>
						</div>
						
						<!-- <h3 class="sl-sp-title bd-no">Floorplans</h3>
						<div id="accordion" class="plan-accordion">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">First Floor: <span>660 sq ft</span>	<i class="fa fa-angle-down"></i></button>
								</div>
								<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<img src="img/plan-sketch.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Second Floor:<span>610 sq ft.</span>	<i class="fa fa-angle-down"></i>
									</button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body">
										<img src="img/plan-sketch.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingThree">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Third Floor :<span>580 sq ft</span>	<i class="fa fa-angle-down"></i>
									</button>
								</div>
								<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<img src="img/plan-sketch.jpg" alt="">
									</div>
								</div>
							</div>
						</div> -->

						<!-- <h3 class="sl-sp-title bd-no">Video</h3>
						<div class="perview-video">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=v13nSVp6m5I" class="video-link"><img src="img/video-btn.png" alt=""></a>
						</div>
						<h3 class="sl-sp-title bd-no">Location</h3>
						<div class="pos-map" id="map-canvas"></div> -->
				</form>
			</div>
			@endif

		</div>
		<!-- sidebar -->
		<div class="col-lg-4 col-md-7 sidebar">
			<div class="author-card">
				<div class="related-properties">
                    <h2>Related Property</h2>
                    @foreach ($moren as $more)
					<div class="rp-item">
                        @foreach(json_decode($more->images) as $image)
                            @if($loop->first)
                            <a href="{{ url('/rentalsdetails',$more->id) }}">
                            <div class="feature-pic set-bg-prop" style="background-image: url({{url('assets/img/house',$image)}});">
                                <div class="sale-notic">FOR {{ $more->rentsale }}</div>
							</div>
						</a>
                            @endif
						@endforeach
						<div class="rp-info">
							<h5>{{ $more->address }}</h5>
							<p><i class="fa fa-map-marker"></i>{{ $more->city }}</p>
						</div>
						<a href="{{ url('/rentalsdetails',$more->id) }}" class="rp-price"># {{ $more->price }}</a>
                    </div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Page end -->




@endsection


@section('footer')
@endsection
