@extends('layouts.mainapp')

@section('content')
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
	
	@section('header')
	@stop

	<!-- Page top section -->
	@if ($detail)
	<section class="page-top-section single-blog" style="background-image: url({{ url ('assets/img/page-top-bg.jpg') }});">
		<div class="container text-white">
			<div class="row">
				<div class="col-xl-8 offset-lg-2">
				<h2>{{ $detail->title }}</h2>
					<a href=""><i class="fa fa-user"></i>{{ $detail->name }}</a>
					<a href=""><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($detail->created_at)->format('d/m/Y') }}</a>
				</div>
			</div>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i>Home</a>
			<a href="/blog"><i class="fa fa-angle-right"></i>Blog</a>
			<span><i class="fa fa-angle-right"></i>Blog Details</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section single-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-1 blog-share">
					<h5>Share</h5>
					<div class="share-links">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-linkedin"></i></a>
						<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="col-md-10 singel-blog-content">
					<img src="{{url('assets/img/blog',$detail->image)}}" alt="">
					<p>{{ $detail->content }}</p>
					
					<div class="blog-tags">
						<p>Tag:</p>
						<a href="#">{{ $detail->tags }}</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- page end-->
       

@endsection


@section('footer')
@endsection