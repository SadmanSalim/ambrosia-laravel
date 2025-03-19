<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ambrosia Restaurant Ltd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<meta name="description" content="At Ambrosia Restaurant Ltd., we believe food is more than sustenance—it's about connection and celebration. Each dish is crafted with love, bringing flavors that tell a story. Join us at Chattogram’s finest dining spot to savor moments with those you cherish.">
	<!-- FavIcons -->
	<link rel="apple-touch-icon" sizes="180x180" href="./images/fav-icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./images/fav-icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./images/fav-icon/favicon-16x16.png">
	<!-- FavIcons ends -->

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
	<style>
		.ab .btn-amb {
			color: #FBB448;
			border: 1px solid #FBB448;
			padding: 5px;
			margin-bottom: 5px;
			border-radius: 5px;
		}

		.ab .btn-amb:hover {
			background-color: #FBB448;
			color: #FFFFFF;
		}
	</style>

</head>

<body>

	<div id="page">


		<!-- <div class="page-inner"> -->

		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)" data-stellar-background-ratio="0.5">
        <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">

        <div class="row d-flex align-item-center">
            <div class="col-sm-4 col-xs-12">

                <div id="gtco-logo" class="logo2"><a href="{{ url('/') }}"><img src="images/Logo2.png" alt="AMBROSIA" /></a></div>
                <div id="gtco-logo" class="logo"><a href="{{ url('/') }}"><img src="images/Logo.png" alt="AMBROSIA" /></a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
                <ul>
                    <li><a style="color:#FFFFFF;font-weight:bold;" href="{{ route('about') }}">About</a></li>
                    <li><a style="color:#FFFFFF;font-weight:bold;" href="{{ route('service') }}">Services</a></li>
                    <li class="has-dropdown">
                        <a style="color:#FFFFFF;font-weight:bold;" href="./menu.php">Menu</a>
                        <ul class="dropdown">
                            <li><a href="thai-cuisine.php">Thai Cuisine</a></li>
                            <li><a href="chinese-cuisine.php">Chainese Cuisine</a></li>
                            <li><a href="indonesian-cuisine.php">Indonesian Cuisine</a></li>
                            <li><a href="indian-cuisine.php">Indian Cuisine</a></li>
                            <li><a href="continental-cuisine.php">Continental Cuisine</a></li>
                            <li><a href="dessert.php">Desert, Drinks, Take away</a></li>
                            <li><a href="party-menu.php">Special Party Menu</a></li>
                            <li><a href="tobacco.php">Tobacco</a></li>
                            <li><a target="_blank" href="docx/Menu-2024.pdf">Download Menu</a></li>
                        </ul>

                    </li>
                    <li><a style="color:#FFFFFF;font-weight:bold;" href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a style="color:#FFFFFF;font-weight:bold;" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="row row-mt-15em">
							<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
								<h1 class="cursive-font">Have a great journey of food!</h1>
							</div>

						</div>


					</div>
				</div>
			</div>
		</header>


    <main>
        @yield('content')
    </main>

    
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)"
			data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row row-pb-md">




					<div class="col-md-12 text-center">
						<div class="gtco-widget">
							<h3>Get In Touch</h3>
							<ul class="gtco-quick-contact">
								<li><a href="#"><i class="icon-phone"></i>+88-02-333313576</a></li>
								<li><a href="#"><i class="icon-phone"></i>+88-02-333313460</a></li>
								<li><a href="#"><i class="icon-mail2"></i>info@ambrosia.com.bd</a></li>
								<li><a target="_blank" href="https://www.messenger.com/t/ambrosiabd.ctg"><i
											class="icon-chat"></i> Live Chat</a></li>
							</ul>
						</div>
						<div class="gtco-widget">
							<h3>Get Social</h3>
							<ul class="gtco-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.facebook.com/ambrosiabd.ctg/"><i
											class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a target="_blank"
										href="https://plus.google.com/+AmbrosiaRestaurantLtdChittagong"><i
											class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-12 text-center copyright">
						<p><small class="block">&copy; 2018 All Rights Reserved.</small>
							<small class="block">Designed by <a href="" target="_blank">NexGen Media</a></small>
						</p>
					</div>

				</div>



			</div>
		</footer>
		<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>

	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>

	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

	<!--<script type="text/javascript" src="slick/jquery-1.8.2.min.js"></script>-->
	<script type="text/javascript" src="{{ asset('slick/migrate.js') }}"></script>
	<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('.popdishes').slick({
				centerMode: true,
				centerPadding: '60px',
				slidesToShow: 3,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 3
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 1
						}
					}
				]
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('.event').slick({
				centerMode: true,
				centerPadding: '60px',
				slidesToShow: 3,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 3
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 1
						}
					}
				]
			});
		});
	</script>

</body>

</html>
