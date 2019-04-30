
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Architecture</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('/css/animate.css')}}" <!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('/css/superfish.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}">

	<link rel="stylesheet" href="{{asset('/css/style.css')}}">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="home">
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a><i class="icon-home2"></i>Online Architecture</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a class="active" href="#home">Home</a>
								</li>
		
								<li>
									<a class="fh5co-sub-ddown">Register/Login</a>
									 <ul class="fh5co-sub-menu">
									 	
									 	
										<li>
											<a href="#" class="fh5co-sub-ddown">Login</a>
											<ul class="fh5co-sub-menu">
												<li><a href="/userLogin">User</a></li>
												<li><a href="#">Architect</a></li>
												<li><a href="{{route('login.adminlogin')}}">Admin</a></li>
												
											</ul>
										</li>
										
										<li>
											<a href="#" class="fh5co-sub-ddown">Register</a>
											<ul class="fh5co-sub-menu">
												<li><a href="#">User</a></li>
												<li><a href="#">Architect</a></li>
												
												
											</ul>
										</li>
										 
									</ul>
								</li>
						
								<li><a href="#footer">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url('{{asset('/images/slide_1.jpg')}}');">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Architecture shape our buildings; thereafter they shape Us.</h2>
			   						
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url('{{asset('/images/slide_2.jpg')}}');">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Architecture is a visual art, and the buildings speak for themselves.</h2>
			   						
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(assets/images/slide_3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Architecture begins where engineering ends.</h2>
			   						
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h3 class="section-title">About Us</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
						</div>
						

						<div class="col-md-33">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-map2"></i>408/1, Kuratoli, Khilkhet, Dhaka 1229, Bangladesh</li>
								<li><i class="icon-phone2"></i>01521209551</li>
								<li><i class="icon-envelope2"></i><a href="#">sabbiralrazi@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="https://www.sabbiralrazi.info">www.sabbiralrazi.info</a></li>
							</ul>
						</div>
						
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p> All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

    </div>

	<!-- jQuery -->


	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{asset('/js/hoverIntent.js')}}"></script>
	<script src="{{asset('/js/superfish.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('/js/jquery.flexslider-min.js')}}"></script>

	<!-- Main JS (Do not remove) -->
	<script src="{{asset('/js/main.js')}}"></script>

	</body>
</html>

