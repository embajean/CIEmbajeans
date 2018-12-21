<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EMBA JEANS</title>
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

		<?php
		$date = date('Y-m-d');
		$now = $date;
		?>

		
	<div class="colorlib-loader"></div>

	<div id="page">
		<!-- navbar -->
		<nav class="colorlib-nav navbar-fixed-top" role="navigation" style="background-color: rgb(231, 228, 233); height:100px; width: auto;" id="nav-top-fixed">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="#"><img src="<?php echo base_url('assets/gambar/logo/logo.png');?>" class="img-fluid" style="width: 190px; height: auto;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo base_url();?>">Home</a></li>
								<li>
									<a href="<?php echo site_url('shop');?>">Shop</a>
								</li>
								<li><a href="<?php echo site_url('Store');?>">Store</a></li>
								<li><a href="#">Partnership</a></li>
								<li><a href="<?php echo site_url('About');?>">About</a></li>
								<li><a href="<?php echo site_url('Contact');?>">Contact</a></li>
								
								<?php
									if(!empty($session)){
										echo '<li class="has-dropdown active"><a href="#"><span class="icon-user"></span>'.$session['namadepan'].'</a>
											<ul class="dropdown">
												<li class="active"><a href="'.site_url('Login/logout').'"> Logout </a></li>
											</ul>
										</li>';
									}else{
										 echo '<li class="active"><a href="'.site_url('login').'"><span class="icon-user"></span>Login</a></li>';
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
		
		<!-- main page-->
		<div class="row main-page">
			<div class="col-md-6 col-md-offset-3"> 
				<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12">
				<h4 class="text-center">Sign In</h4>
				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2" id="ver-login">
					<?php echo form_open('login/process', '');?>
					<div class="col-md-3" id="lbl_log">
						<label for="email">Email</label>
					</div>
					<div class="col-md-9">
						<input type="email" name="email" placeholder="embajeans@embajeans.com" class="form-control">
					</div>

					<div class="col-md-3" id="lbl_log">
						<label for="passowrd">Password</label>
					</div>
					<div class="col-md-9">
						<input type="password"  name="password" placeholder="*****" class="form-control">
					</div>
					<div class="col-md-6 col-lg-6 col-xs-6 col-md-offset-3 col-lg-ofsset-3 col-xs-offset-3">
						<input type="submit" class="btn btn-warning" value="Sign in">
					</div>
					<?php echo form_close();?>

				</div>
			</div>

			<div class="col-lg-6 col-md-12 col-xs-12">
				<h4 class="text-center">Sign Up</h4>
				<!-- <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2" id="ver-login"> -->
					<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="ver-login">
					
					<div class="row">
						<form action="<?php echo site_url('Login/regis');?>" class="form-control" method="post">
						<div class="col-md-5" id="lbl_log">
							<label>Nama Depan</label>
						</div>
						<div class="col-md-7">
							<input type="text" name="usernama_depan" class="form-control" placeholder="Nama Depan" required="">
						</div>
						<div class="col-md-5" id="lbl_log">
							<label>Nama Belakang</label>
						</div>
						<div class="col-md-7">
							<input type="text" name="usernama_belakang" class="form-control" placeholder="Nama Depan" required="">
						</div>
						<div class="col-md-5" id="lbl_log">
							<label>Tanggal Lahir</label>
						</div>
						<div class="col-md-7">
							<input type="date" name="tgl_lahir" class="form-control" required="" max="<?php echo $now;?>">
							<input type="hidden" name="tgl_daftar" value="<?php echo $now;?>">
						</div>
						<div class="col-md-5" id="lbl_log">
							<label>Nomor</label>
						</div>
						<div class="col-md-7">
							<input type="text" minlength="11" name="telephon" class="form-control" required="">
						</div>
						<div class="col-md-5" id="lbl_log">
							<label>Email</label>
						</div>
						<div class="col-md-7">
							<input type="email" name="email" class="form-control" placeholder="embajeans@embajeans.com" required="">
						</div>
						<div class="col-md-5" id="lbl_log">
							<label>Password</label>
						</div>
						<div class="col-md-7">
							<input type="password" name="password" class="form-control" placeholder="****" required="">
						</div>
						<div class="col-md-5" id="lbl_log">
							<label>Re-Password</label>
						</div>
						<div class="col-md-7">
							<input type="password" name="repassword" class="form-control" placeholder="*****" required="">
						</div>
						
						<div class="col-md-6 col-lg-6 col-xs-6 col-md-offset-3 col-lg-ofsset-3 col-xs-offset-3">
							<input type="submit" class="btn btn-warning" value="Sign Up" >
						</div>
						</form>
					</div>
					
				</div>
			</div>

		</div>
		<!-- end main page-->

	</div>


	<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo" style="background-color: rgb(50, 50, 50)">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-lg-4 colorlib-widget">
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
					<div class="col-lg-4 colorlib-widget">
						<h4><p class="txt-foot">EXPERIENCE</p></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="<?php echo site_url('Home/faq');?>" style="color: grey; font-size: 16px;">FAQ</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Returns / Shipping</a></li>
								<li class="active"><a href="<?php echo site_url('Home/storepolicy');?>" style="color: grey; font-size: 16px;">Store Policy</a></li>
								<li><a href="<?php echo site_url('Home/payment');?>" style="color: grey; font-size: 16px;">Payment Methods</a></li>
							</ul>
						</p>
					</div>

					<div class="col-lg-4">
						<h4 ><p class="txt-foot">FOLLOW US</p></h4>
						<ul class="colorlib-social-icons">
							<li><a href="https://www.facebook.com/embajeansid/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/embajeans/" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCdifDj9A6WToN6L6ZMw1bKQ" target="_blank" style="color: grey; font-size: 16px;"><i class="icon-youtube"></i></a></li>
						</ul>
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

	<script>
	  $('#modal').modal('show');
	</script>

</html>