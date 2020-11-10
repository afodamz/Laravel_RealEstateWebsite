
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
			<h2>Blog/News</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Blog</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div class="row">
				<!-- blog post -->
				@if (count($blogs)===0)
					<h5> There are no data for this page</h5>
				@endif
				@foreach($blogs as $blog)
				<div class="col-lg-4 col-md-6 blog-item">
					<a href="{{ url('/blogdetails',$blog->id) }}"><img src="{{url('assets/img/blog',$blog->image)}}" alt=""></a>
					<h5><a href="{{ url('/blogdetails',$blog->id) }}">{{ $blog->title }}</a></h5>
					<div class="blog-meta">
						<span><i class="fa fa-user"></i>{{ $blog->name }}</span>
						<span><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</span>
					</div>
					
				</div>
				@endforeach
				
			</div>

			<div class="site-pagination">
				{{ $blogs->links() }}
			</div>
		</div>
	</section>
	<!-- page end -->



	@endsection


@section('footer')
@endsection