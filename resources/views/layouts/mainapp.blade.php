<!DOCTYPE html>
<html lang="en">
<head>
	<title>Phoenix Global Properties</title>
	<meta charset="UTF-8">
	<meta name="description" content="Phoenix Global Properties (PGP) is a real estate marketing and management firm established in 2009 with an indepth knowledge and
	 understanding of the industry challenges and opportunities.
	  PGP was established to provide her client with great and affordable deals either through project financing, joint ventures, sales and leases.">
	<meta name="keywords" content="realestate,rent house, rent,
	newhome, for sale, homes for sale near me, purchase, home,
	estate agents, real estate agent, commercial real estate, mls listing,
	condos for sale, apartments for rent near me, condo, for sale by owner,land for sale,
	homes for rent, property for sale, property, homes for sale, houses for rent,
	 houses for sale, buy, rental, property, Nigeria">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Favicon -->   
	<link rel="shortcut icon" type="image/x-icon" href="{{ url ('assets/img/logo.jpg') }}">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ url ('assets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ url ('assets/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ url ('assets/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ url ('assets/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ url ('assets/css/style.css') }}"/>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ url ('assets/css/lightbox.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&display=swap" rel="stylesheet">
</head>
<body>
	@yield('content')
	
	@include('header.header')

	@include('footer.footer')

	@section('scroll')
	<a id="scrollUp" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	
	<!--====== Javascripts & Jquery ======-->
	
	<script type="text/javascript" src="{{ url ('assets/js/lightbox-plus-jquery.min.js') }}"></script>
	<script src="{{ url ('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ url ('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ url ('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ url ('assets/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ url ('assets/js/magnific-popup.min.js') }}"></script>
	<script src="{{ url ('assets/js/main.js') }}"></script>
	<script src="{{ url ('assets/js/scroll.js') }}"></script>
</body>
</html>
</body>
</html>