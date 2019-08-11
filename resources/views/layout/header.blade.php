<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/favicon.png" type="image/png">
		<title>AJSS</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/linericon/style.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/owl-carousel/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/lightbox/simpleLightbox.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/nice-select/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/animate-css/animate.css')}}">
		<!-- main css -->
		<link rel="stylesheet" href="{{asset('bootstrap_assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('bootstrap_assets/css/responsive.css')}}">
	</head>

	<body>

		<!--================Header Menu Area =================-->
		<header class="header_area">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						{{-- <img --}}
								{{-- src="{{asset('bootstrap_assets/img/logo.png')}}" alt=""> --}}
						<a class="navbar-brand logo_h" href="{{ route('index') }}" style="color: whitesmoke; font-weight: bold">AJSSAIFPU</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="{{ route('index') }}"><span class="fa fa-home"></span></a></li>
								{{-- <li class="nav-item"><a class="nav-link" href="{{ route('about.us') }}">About</a></li> --}}

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">About</a>
									<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{ route('ajssaifpu') }}">AJSSAIFPU</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('authorship') }}">Authorship</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('peer.review') }}">Peer Review</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('review.process') }}">Duplicate Publication</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('guidelines') }}">Guidelines</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('payment.mode') }}">Mode of Payment</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('paper.status') }}">Check Paper Status</a></li>
									</ul>
								</li>
								
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Publication</a>
									<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{ route('charges') }}">Charges</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('steps') }}">Steps</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('ethics') }}">Ethics</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('review.process') }}">Review Process</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('guidelines') }}">Guidelines</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('payment.mode') }}">Mode of Payment</a></li>
										<li class="nav-item"><a class="nav-link" href="{{ route('paper.status') }}">Check Paper Status</a></li>
									</ul>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Downloads</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Copyright Form</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Paper Template</a></li>
									</ul>
								</li>

								{{-- <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li> --}}

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
										aria-haspopup="true" aria-expanded="false">Special Events</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Call for Conference</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Future Conference</a></li>
									</ul>
								</li>
								
							<li class="nav-item"><a class="nav-link" href="{{ route('contact.us') }}">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('editors') }}">Editorial</a></li>

							</ul>
							<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="{{ route('submit.paper.form') }}" class="tickets_btn">Submit Paper</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!--================Header Menu Area =================-->