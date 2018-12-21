<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About</title>
	<link href='<?php echo base_url('assets/Gambar/Logo/logoemba.png');?>' rel='shortcut icon'>
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
							<div id="colorlib-logo"><a href="#"><img src="<?php echo base_url('assets/Gambar/Logo/Logo.png');?>" class="img-fluid" style="width: 190px; height: auto;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo base_url();?>">Home</a></li>
								<li>
									<a href="<?php echo site_url('shop');?>">Shop</a>
								</li>
								<li><a href="<?php echo site_url('Store');?>">Store</a></li>
								<li><a href="#">Partnership</a></li>
								<li class="active"><a href="<?php echo site_url('About');?>">About</a></li>
								<li><a href="<?php echo site_url('Contact');?>">Contact</a></li>
								
								<?php
									if(!empty($session)){
										echo '<li class="has-dropdown"><a href="#"><span class="icon-user"></span>'.$session['namadepan'].'</a>
											<ul class="dropdown">
												<li><a href="'.site_url('Ordering/Transaksiku').'">Transaksiku</a></li>
												<li><a href="'.site_url('Login/logout').'"> Logout </a></li>
											</ul>
										</li>';
									}else{
										 echo '<li><a href="'.site_url('login').'"><span class="icon-user"></span>Login</a></li>';
									}
								?>
								<li><a href="<?php echo site_url('cart/mycart');?>"><i class="icon-shopping-cart">(<?php echo $cart['jumlah'];?>)</i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- end navbar -->
		

		<!-- main page -->
		<div class="colorlib-shop" style="padding-bottom : 0px !important; margin-bottom : -30px;">
			<div class="row foot" id="about">
				<div class="col-lg-5">
					<center class="center-store">
						<button class="btn btn-warning btn-store">ABOUT</button>
					</center>
				</div>
				<div class="col-lg-7">
					<img src="<?php echo base_url('assets/Gambar/about.PNG');?>" class="img img-responsive">
				</div>
			</div>

			<div class="row">
				<div class="jumbotron" style="background-color: rgb(230, 230, 230);">
					<div class="container">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-5 col-md-5 col-xs-12">
								<button class="btn btn-default btn-about fade-in"><i class="icon-arrow-right arr-right"> 1968 : WHEN IT'S  <br>ALL STARTED</i></button>
								<p id="started">EMBA Jeans merupakan perusahaan retail pakaian yang telah berdiri sejak tahun 1968. EMBA Jeans diproduksi dengan teknik pengerjaan yang sempurna sehingga memiliki kualitas yang memuaskan. Diproduksi dengan bahan-bahan berkualitas dan diseleksi dengan material terbaik tentu akan menjamin kenyamanan dan memberikan mode atau style kekinian pada gaya berpakaian Anda.</p>
								<br>
								<p id="started">EMBA Jeans juga merupakan produk asli Indonesia yang telah merambah bisnis Internasional. Serta menjadi idaman para lelaki modern, yang ingin bergaya stylish dan menawan. Kepuasaan pelanggan menjadi prioritas kami, dengan mengedepankan kredibilitas terbaik.</p>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-12">
								<img src="<?php echo base_url('assets/Gambar/abou2.PNG');?>" class="img img-responsive">
							</div>
						
					</div>
				</div>
			</div>

		</div>
		<!-- end main page-->
		

		<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo" style="background-color: rgb(50, 50, 50)">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-3 colorlib-widget">
						<h4><p class="txt-foot">Our Web</p></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="<?php echo base_url();?>" style="color: grey; font-size: 16px;">Home</a></li>
								<li><a href="<?php echo site_url('Shop');?>" style="color: grey; font-size: 16px;">Shop</a></li>
								<li><a href="<?php echo site_url('Store');?>" style="color: grey; font-size: 16px;">Store</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Partnership</a></li>
								<li><a href="<?php echo site_url('About');?>" style="color: grey; font-size: 16px;">About</a></li>
								<li><a href="<?php echo site_url('Contact');?>" style="color: grey; font-size: 16px;">Contact</a></li>
								
							</ul>
						</p>
					</div>
					<div class="col-lg-3 colorlib-widget">
						<h4><p class="txt-foot">EXPERIENCE</p></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="<?php echo site_url('Home/faq');?>" style="color: grey; font-size: 16px;">FAQ</a></li>
								<li><a href="<?php echo site_url('Home/shippingandreturn');?>" style="color: grey; font-size: 16px;">Returns / Shipping</a></li>
								<li class="active"><a href="<?php echo site_url('Home/storepolicy');?>" style="color: grey; font-size: 16px;">Store Policy</a></li>
								<li><a href="<?php echo site_url('Home/payment');?>" style="color: grey; font-size: 16px;">Payment Methods</a></li>
							</ul>
						</p>
					</div>

					<div class="col-lg-3 colorlib-widget">
						<h4 ><p class="txt-foot">FOLLOW US</p></h4>
						<ul class="colorlib-social-icons">
							<li><a href="https://www.facebook.com/embajeansid/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/embajeans/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCdifDj9A6WToN6L6ZMw1bKQ" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>

						<!-- <div class="row">
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
						</div> -->
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

	</body>
</html>

