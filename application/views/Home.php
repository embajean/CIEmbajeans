<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/CustomSomnium.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/store/');?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" style="background-color: rgb(231, 228, 233);">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="#"><img src="<?php echo base_url('assets/gambar/logo/logo.png');?>" class="img-fluid" style="width: 190px; height: auto;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="shop.html">Shop</a>
									<!-- <ul class="dropdown">
										<li><a href="product-detail.html">Store</a></li>
										<li><a href="cart.html">Shipping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul> -->
								</li>
								<li><a href="blog.html">Store</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="#"><span class=""><img src="<?php echo base_url('assets/gambar/logo/login.png');?>" style="width: 50px;"></span> Log In</a></li>
								<li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- main page -->
		<div id="bg-fixed" style="background-image: url(assets/store/images/item-1.jpg); height: 100%;">
			<div class="colorlib-shop">
				<div class="container">
					<div class="row">
						<p id="playitcool" class="text-center">PLAY IT<br>COOL</p>
						<div class="text-center">
							<button type="button" class="btn btn-default btn-shop">SHOP NOW</button>
						</div>
					</div>
				</div>
			</div>
			<div class="colorlib-shop" id="jumb-color">
				<!-- <div class="container">
					<div class="row">
						<div class="col-lg-4" id="h-seller">
							<img class="img-responsive" src="<?php echo base_url('assets/store/images/item-8.jpg');?>">
						</div>
						<div class="col-lg-4" id="h-seller">
							<img class="img-responsive" src="<?php echo base_url('assets/store/images/item-8.jpg');?>">
						</div>
						<div class="col-lg-4" id="h-seller">
							<img class="img-responsive" src="<?php echo base_url('assets/store/images/item-8.jpg');?>">
						</div>
					</div>
				</div> -->
				<div id="h-seller">
					<div class="row">
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/store/images/item-8.jpg');?>">
							<div id="p-seller">
								<div class="caption">
									Shop New Arrivals
									<button class="btn-seller btn btn-default"><i class="icon-arrow-up2"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/store/images/item-8.jpg');?>">
							<div id="p-seller-best">
								<div class="caption">
									Shop Best Seller
									<button class="btn-seller-best btn btn-warning"><i class="icon-arrow-up2"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/store/images/item-8.jpg');?>">
							<div id="p-seller">
								<div class="caption">
									Find Our Stores
									<button class="btn-seller btn btn-default"><i class="icon-arrow-up2"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end bg-->
		<!-- end main page -->
		
		<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo" style="background-color: rgb(50, 50, 50)">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-lg-3 colorlib-widget">
						<h4 style="color: orange; font-family: cursive; font-size: 20px;">Our Web</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#" style="color: grey; font-size: 16px;">Home</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Shop</li>
								<li><a href="#" style="color: grey; font-size: 16px;">Offline Store</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">1968</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Contact</a></li>
								<!-- <li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
							</ul>
						</p>
					</div>
					<div class="col-lg-3 colorlib-widget">
						<h4 style="color: orange; font-family: cursive; font-size: 20px;">EXPERIENCE</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#" style="color: grey; font-size: 16px;">FAQ</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Returns / Shipping</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Store Policy</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Payment Methods</a></li>
							</ul>
						</p>
					</div>

					<div class="col-lg-3">
						<h4 style="color: orange; font-family: cursive; font-size: 20px;">FOLLOW US</h4>
						<ul class="colorlib-social-icons">
							<li><a href="https://www.facebook.com/embajeansid/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/embajeans/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCdifDj9A6WToN6L6ZMw1bKQ" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>

					<div class="col-lg-3">
						<h4 style="color: orange; font-family: cursive; font-size: 20px;">Join OurLetter</h4>
						<div class="row">
							<div class="col-lg-1 col-md-1 col-xs-1">
								<i class="icon-user"></i>
							</div>
							<div class="col-lg-3 col-md-3 col-xs-3">
								<?php echo form_input($css_nama);?>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-md-2 col-xs-2">
								<?php echo form_dropdown($css_dd_nomor, $arr_nomor);?>
							</div>
							<div class="col-lg-2 col-md-2 col-xs-2">
								<?php echo form_input($css_nomor);?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</footer>
		<div class="copy" style="background-color: orange;">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							&copy;<script>document.write(new Date().getFullYear());</script> by EmbaJeans
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
						</p>
					</div>
				</div>
			</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/store/');?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url('assets/store/');?>js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url('assets/store/');?>js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('assets/store/');?>js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url('assets/store/');?>js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url('assets/store/');?>js/main.js"></script>

	</body>
</html>

