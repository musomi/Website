<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Capitolphysiotherapy</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

	<script type="text/javascript">
function blinktext() {
  var f = document.getElementById('blinking');
  setInterval(function() {
    f.style.visibility = (f.style.visibility == 'hidden' ? '' : 'hidden');
  }, 1000);
}
</script>

</head>

<body onload="blinktext();">
	<!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 top-social-agile">
						<div class="row">
							<!-- social icons -->
							<ul class="col-lg-4 col-6 top-right-info text-center">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="mx-3">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li class="ml-3">
									<a href="#">
										<i class="fab fa-pinterest-p"></i>
									</a>
								</li>
							</ul>
							<!-- //social icons -->
							<div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
								<p class="text-white">
									<i class="fas fa-map-marker-alt mr-2"></i>5th Avenue Office Suites 6th floor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 top-social-agile text-lg-right text-center">
						<div class="row">
							<div class="col-lg-7 col-6 top-w3layouts">
								<p class="text-white">
									<i class="far fa-envelope-open mr-2"></i>
									<a href="#" class="text-white"></a>
								</p>
							</div>
							<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
								<p class="text-white">
									<i id="blinking" class="fas fa-phone mr-2"></i>+254702617960</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<div id="home">
		<!-- navigation -->
		<div class="main-top py-1">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
				<div class="container">
					<!-- logo -->
					<h1>
						<a class="navbar-brand font-weight-bold font-italic" href="#">
              <img style="height:15%;width:23%" src="/images/logo.jpg"/>
							<span>Ca</span>pitolphysiotherapy
						</a>
					</h1>
					<!-- //logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item mt-lg-0 mt-3">
								<a class="nav-link" href="/">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3 {{$page=='About Us'?'active':''}}">
								<a class="nav-link" href="/about">About Us</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3 {{$page=='Our Services'?'active':''}}">
								<a class="nav-link" href="/services">Services</a>
							</li>
							<li class="nav-item dropdown {{$page=='Appointment'||$page=='Gallery'?'active':''}}">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">
									{{$page=='Gallery'?'Gallery':'Appointment'}}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="dropdown-item" href="/appointment">Book</a>
									<a class="dropdown-item" href="/gallery">Gallery</a>
									<!--
									<a class="dropdown-item scroll" href="#blog">Blog</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="single.html">Single Page</a>
								-->
								</div>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3 {{$page=='Contact Us'?'active':''}}">
								<a class="nav-link" href="/contact">Contact Us</a>
							</li>
						</ul>
						<!-- login
						<a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
							<i class="fas fa-sign-in-alt mr-2"></i>Login</a>
						login -->
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
		<!-- modal -->
		<!-- login -->
		<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Login Now</h5>
							<form action="#" method="post">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="password" placeholder="" required="">
								</div>
								<button type="submit" class="btn submit mb-4">Login</button>
								<p class="forgot-w3ls text-center pb-4">
									<a href="#" class="text-white">Forgot your password?</a>
								</p>
								<p class="account-w3ls text-center pb-4">
									Don't have an account?
									<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //login -->
		<!-- register -->
		<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-2">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Register Now</h5>
							<form action="#" method="post">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
								</div>
								<button type="submit" class="btn btn-primary submit mb-4">Register</button>
								<p class="text-center pb-2">
									<a href="#" class="text-white">By clicking Register, I agree to your terms</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //register -->
		<!-- //modal -->
	</div>
	<!-- //header 2 -->

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">{{$page}}</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->
	@yield('content')




	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids pt-sm-4 pt-3">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-md-4 w3l-footer">
						<h2 class="mb-sm-3 mb-2">
							<a href="index.html" class="text-white font-italic font-weight-bold">
								<span>Ca</span>pitol
								<img style="width:15%;height:10%" src="images/logo.jpg">
							</a>
						</h2>
						<p>We care about full satisfaction of our clients by offering affordable quality services </p>
					</div>
					<div class="col-md-4 w3l-footer my-md-0 my-4">
						<h3 class="mb-sm-3 mb-2 text-white">Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-location-arrow float-left"></i>
								<p class="ml-4">
									<span>5th Avenue Office suites opposite </span>Nairobi traffic headquaters. </p>
								<div class="clearfix"></div>
							</li>
							<li class="my-3">
								<i class="fas fa-phone float-left"></i>
								<p class="ml-4">	+254 702 617 960 </p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="far fa-envelope-open float-left"></i>
								<a href="mailto:info@example.com" class="ml-3"></a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 w3l-footer">
						<h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li>
									<a href="/">Home</a>
								</li>
								<li class="mt-2">
									<a href="/about">About Us</a>
								</li>
								<li class="mt-2">
									<a href="/gallery">Gallery</a>
								</li>

								<li class="mt-2">
									<a href="/contact">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
					<p class="copy-right-grids mt-lg-1">© <?php echo date("Y"); ?> Capitolphysiotherapy. All Rights Reserved.</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<!-- Default-JavaScript-File -->

	<!--start-date-piker-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<!-- //End-date-piker -->

	<!-- Gallery-js -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.hoverdir.js"></script>
	<script>
		$(function () {

			$(' #da-thumbs > li ').each(function () {
				$(this).hoverdir();
			});

		});
	</script>

	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.da-thumbs a').Chocolat();
		});
	</script>
	<!-- Gallery-js -->

	<!-- banner slider -->
	<script src="{{asset('js/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="{{asset('js/fixed-nav.js')}}"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
	<!-- move-top -->
	<script src="{{asset('js/move-top.js')}}"></script>
	<!-- easing -->
	<script src="{{asset('js/easing.js')}}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{asset('js/medic.js')}}"></script>

	<script src="{{asset('js/bootstrap.js')}}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>
