<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EMBA JEANS</title>
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
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/CustomSomnium.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/store/');?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	</head>
	<body>

		<!-- <div id="modal" class="modal fade" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">SAAAALLLEEEE ! ! ! !</h4>
		      </div>
		      <div class="modal-body">
		        KELUAR POP-uP
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div><!-- /.modal-content -->
		  <!--</div><!-- /.modal-dialog -->
		<!--</div><!-- /.modal -->

			<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Sign In</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
						<?php echo form_open('login/process', '');?>
					      <div class="panel-body">

					      	<input type="text" name="id_barang" id="txt-idbarang">
					      	
					      	<div class="col-md-12">
					      		<label for="email">Email</label>
					      	</div>
					      	<div class="col-md-12">
					      		<input type="email" required name="email" id="email" placeholder="Masukkan email" class="form-control">
					      	</div>
					      	<div class="col-md-12">
					      		<label for="password">Password</label>
					      	</div>
					      	<div class="col-md-12">
					      		<input type="password" name="password" placeholder="****" required pattern=".{8,}" title="min 8 character" class="form-control">
					      	</div>
					      	<div class="col-md-6">
								<input type="submit" class="btn btn-warning" value="Sign in">
							</div>
							<div class="col-md-6">
								<a href="<?php echo site_url('Login/register');?>" class="btn btn-warning" target="_blank">Daftar Baru</a>
							</div>
					      </div>
					    
						<?php echo form_close();?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>

		
	<div class="colorlib-loader"></div>

	<div id="page">

		<!-- navbar -->
		<nav class="colorlib-nav navbar-fixed-top" role="navigation" style="background-color: rgb(231, 228, 233); height:90px; width: auto;" id="nav-top-fixed">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="#"><img src="<?php echo base_url('assets/Gambar/Logo/Logo.png');?>" class="img-fluid" style="width: 190px; height: auto;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1" id="cartnavbar">
							<ul>
								<?php
								#$home = (!empty($home) == 'home') ? 1 : 0;
									if($home == 'home'){

										echo '<li class="active"><a href="'.base_url().'">Home</a></li>';

									}else{

										echo '<li><a href="'.base_url().'">Home</a></li>';

									}

									if($home == 'shop'){

										echo '<li class="active">
												<a href="'.site_url('shop').'">Shop</a>
											</li>';

									}else{

										echo '<li>
												<a href="'.site_url('shop').'">Shop</a>
											</li>';

									}

									if(isset($store)){

										echo '<li class="active"><a href="'.site_url('Store').'">Store</a></li>';

									}else{

										echo '<li><a href="'.site_url('Store').'">Store</a></li>';

									}

									if(isset($partner)){

										echo '<li class="active"><a href="#">Partnership</a></li>';

									}else{

										echo '<li><a href="#">Partnership</a></li>';

									}

									if(isset($about)){

										echo '<li><a href="'.site_url('About').'">About</a></li>';

									}else{

										echo '<li><a href="'.site_url('About').'">About</a></li>';

									}

									if(isset($contact)){

										echo '<li class="active"><a href="'.site_url('Contact').'">Contact</a></li>';

									}else{

										echo '<li><a href="'.site_url('Contact').'">Contact</a></li>';

									}

									if(isset($user)){

										if(!empty($session)){
											echo '<li class="has-dropdown active"><a href="#"><span class="icon-user"></span>'.$session['namadepan'].'</a>
												<ul class="dropdown">
													<li><a href="'.site_url('Login/logout').'"> Logout </a></li>
												</ul>
											</li>';
										}else{
											 echo '<li><a href="'.site_url('login').'"><span class="icon-user"></span>Login</a></li>';
										}

									}else{

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

									}
									

									if(isset($keranjang)){
										echo '<li class="active"><a href="'.site_url('cart/mycart').'"><i class="icon-shopping-cart">('.$cart['jumlah'].')</i></a></li>';
									}else{

										echo '<li><a href="'.site_url('cart/mycart').'"><i class="icon-shopping-cart">('.$cart['jumlah'].')</i></a></li>';

									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- end navbar -->