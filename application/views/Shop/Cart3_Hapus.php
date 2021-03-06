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

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/store/');?>js/modernizr-2.6.2.min.js"></script>

	<!-- somnium-->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/CustomSomnium.css">

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		
		<!-- navbar -->
		<nav class="colorlib-nav navbar-fixed-top" role="navigation" id="nav-top-fixed">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="#"><img src="<?php echo base_url('assets/gambar/logo/logo.png');?>" class="img-fluid" style="width: 190px; height: auto;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo base_url();?>">Home</a></li>
								<li class="active">
									<a href="<?php echo site_url('Shop');?>">Shop</a>
								</li>
								<li><a href="<?php echo site_url('Store');?>">Store</a></li>
								<li><a href="#">Partnership</a></li>
								<li><a href="<?php echo site_url('About');?>">About</a></li>
								<li><a href="<?php echo site_url('Contact');?>">Contact</a></li>
								<li><a href="#"><span class="icon-user"</span> Log In</a></li>
								<li><a href="<?php echo site_url('shop/mycart');?>"><i class="icon-shopping-cart"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- end navbar -->

		<!-- main page -->
		<div class="colorlib-shop main-page" id="bg-shop">
			<div class="container">

				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
						<div class="row" id="vertical">
							<div class="col-lg-6 col-md-6">
								<h5>My Cart(1)</h5>
							</div>
							<div class="col-lg-2 col-md-2">
								<h5>Harga</h5>
							</div>
							<div class="col-lg-2 col-md-2">
								<h5>Jumlah</h5>
							</div>
							<div class="col-lg-2 col-md-2">
								<h5>Total</h5>
							</div>
						</div>

						<!--  item -->
						<div class="row" id="stuff">
							<div class="col-lg-6 col-md-6">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<img src="<?php echo base_url('assets/store/images/item-6.jpg');?>" class="img img-responsive">
									</div>
									<div class="col-lg-6 col-md-6">
										Detail Product
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2">
								<p> Rp. 1000.0000;</p>
							</div>
							<div class="col-lg-2 col-md-2">
								<input type="number" name="" class="form-control text-center" value="1" min="1" max="10">
							</div>
							<div class="col-lg-2 col-md-2">
								<p>Rp 10000.0000,-</p>
							</div>
						</div>

						<div class="row" id="stuff">
							<div class="col-lg-6 col-md-6">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<img src="<?php echo base_url('assets/store/images/item-6.jpg');?>" class="img img-responsive">
									</div>
									<div class="col-lg-6 col-md-6">
										Detail Product
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2">
								<p> Rp. 1000.0000;</p>
							</div>
							<div class="col-lg-2 col-md-2">
								<input type="number" name="" class="form-control text-center" value="1" min="1" max="10">
							</div>
							<div class="col-lg-2 col-md-2">
								<p>Rp 10000.0000,-</p>
							</div>
						</div>
						<!-- end item -->

						<div class="row">
							<div class="col-lg-6 col-md-6">
								Kodepromo
								<br>
								catatan
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="row" id="subtotal">

									<div class="col-md-6 col-lg-6">
										Subtotal
									</div>
									<div class="col-md-6 col-lg-6">
										Rp. 1000.0000,-
									</div>
									<div class="col-md-6 col-lg-6">
										Pengiriman
									</div>
									<div class="col-md-6 col-lg-6">
										JNE
									</div>
									<div class="col-md-6 col-lg-6">
										Ongkos Kirim
									</div>
									<div class="col-md-6 col-lg-6">
										<select class="form-control">
											<option>Indonesia</option>
											<option>Singapura</option>
										</select>
									</div>
								</div>

								<div class="row" id="total">
									<div class="col-lg-6 col-md-6">
										<h3>Total</h3>
									</div>
									<div class="col-lg-6 col-md-6">
										<h3>Rp. 10000.000,-</h3>
									</div>
									<button class="btn btn-warning">Pembayaran</button>
								</div>

							</div>
						</div>

					</div>
				</div>


			</div><!--container-->
		</div><!-- bg-shop -->
		<!-- end page-->


	</div> <!-- page -->

	<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo" style="background-color: rgb(50, 50, 50)">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-lg-3 colorlib-widget">
						<h4><p class="txt-foot">Our Web</p></h4>
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
						<h4><p class="txt-foot">EXPERIENCE</p></h4>
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
						<h4 ><p class="txt-foot">FOLLOW US</p></h4>
						<ul class="colorlib-social-icons">
							<li><a href="https://www.facebook.com/embajeansid/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/embajeans/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCdifDj9A6WToN6L6ZMw1bKQ" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>

						<div class="row">
							<div class="col-lg-3">
						<h4><p class="txt-foot">Join Our Letter</p></h4>
							<div class="row">
									<?php
									$letter = array(
										'name' => 'email',
										'placeholder' => 'embajeans@embajeans.com',
										'class' => 'form-control',
										'type' => 'email',
									);
									$btn = array(
												'class' => 'btn btn-warning',
												'value' => 'Subscribe Now',
												'style' => 'size : 15px;',
												);
										echo '<div class="col-lg-12">';
										echo form_open();
											echo form_input($letter);
										echo '</div>';
										echo '<div class="col-md-4 col-md-offset-2" id="subscribe">';
											echo form_submit($btn);
										echo form_close();
										echo '</div>';
									?>
								
							</div>
						</div>
						</div>
					</div>

				</div>
			</div>
		</footer>
		<div class="copy foot">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<p class="text-center copyright">
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							&copy;<script>document.write(new Date().getFullYear());</script> by EmbaJeans
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
						</p>
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
	</script>

	</body>
</html>