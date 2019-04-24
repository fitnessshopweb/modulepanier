<?php
include('login2.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: index2.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home — Static Build System</title>

	<!-- Fav Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav-icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav-icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav-icons/favicon-16x16.png">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/fontawesome/css/fontawesome-all.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/flaticon/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/magnific-popup/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="dependencies/animate.css/css/animate.css" type="text/css">
	<link rel="stylesheet" href="dependencies/colornip/css/colornip.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css" type="text/css">
	<link rel="stylesheet" href="dependencies/slick-carousel/css/slick-theme.css" type="text/css">
	<link rel="stylesheet" href="dependencies/material-design-icons/css/material-icons.css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">

	<link id="theme" rel="stylesheet" href="assets/css/theme-color/theme-default.css" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700%7CRoboto:300,400,500,700,900" rel="stylesheet">


</head>
<body id="home-version-1" class="home-version-1" data-style="default">
<div id="site">



		<!--=========================-->
		<!--=        Navbar Two        =-->
		<!--=========================-->
		<header id="header" class="header_area hdr_area_two">
			<!-- Start top toolbar -->
			<section class="top_toolbar top_toolbar_new">
				<div class="vigo_container_one">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="toolbar_left">
								<p><span>Get 30% Discounts!</span> Offer ends in</p>
								<div id="count_down"></div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="toolbar_right">
								<ul>
									<li class="search">
										<i class="fas fa-search"></i>
										<div class="search_detail_two">
											<form action="#">
												<input type="text" placeholder="Search Your key">
												<button>Go</button>
											</form>
										</div>
									</li>
									<li class="cart">
										<i class="fas fa-shopping-basket"></i>
										<div class="cart_detail">
											<div class="single_cart">
												<div class="cart_left">
													<img src="media/images/banner-two/cart-one.png" alt="">
												</div>
												<div class="cart_right">
													<h3>Vaxin Regular Big Name</h3>
													<p>$66 <sup>USD</sup></p>
												</div>
											</div>
											<div class="single_cart">
												<div class="cart_left">
													<img src="media/images/banner-two/cart-two.png" alt="">
												</div>
												<div class="cart_right">
													<h3>Vaxin Woman</h3>
													<p>$76 <sup>USD</sup></p>
												</div>
											</div>
											<div class="cart_more">
												<a href="#">View Cart <i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</li>
									<li class="phone">
										<a href="#">
							<i class="fas fa-phone"></i>
							Call +216 24 733 220
						</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top toolbar -->
		</header>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		



<div class="wrapper-page">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="card">
<div class="card-header border-bottom text-center">
<h4 class="card-title">Sign In</h4>
</div>
<div class="card-body" id="login">
<form class="form-horizontal m-t-20" method="POST" action="">
<div class="form-group">
<input class="form-control" type="text" name="username" placeholder="Enter the User Name">
</div>
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="password">
</div>
<div class="form-group">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Remember me</label>
</div>
</div>
<div class="form-group text-center m-t-20">
	  <input name="submit" type="submit" value=" Login " class="btn btn-common mr-3">
   <span><?php echo $error; ?></span>

</div>
<div class="form-group">
<div class="float-right">
<a href="forgot-password.html" class="text-muted"><i class="lni-lock"></i> Forgot your password?</a>
</div>
<div class="float-left">
<a href="sign-up.html" class="text-muted"><i class="lni-user"></i> Create an account</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from preview.uideck.com/items/inspire-pro/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 11:39:29 GMT -->
</html>