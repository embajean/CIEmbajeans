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
		<!--</div><!-- /.modal --> -->

		
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
								<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
								<li>
									<a href="<?php echo site_url('shop');?>">Shop</a>
								</li>
								<li><a href="<?php echo site_url('Store');?>">Store</a></li>
								<li><a href="#">Partnership</a></li>
								<li><a href="<?php echo site_url('About');?>">About</a></li>
								<li><a href="<?php echo site_url('Contact');?>">Contact</a></li>
								
								<?php
									if(!empty($session)){
										echo '<li class="has-dropdown"><a href="#"><span class="icon-user"></span>'.$session['namadepan'].'</a>
											<ul class="dropdown">
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
			<!-- aside -->
			<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">

				<li style="background-image: url(assets/Gambar/home1-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Huge</h1>
					   					<h2 class="head-2">Sale</h2>
					   					<h2 class="head-3">45% off</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>

			   	<li style="background-image: url(assets/store/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Men's</h1>
					   					<h2 class="head-2">Jeans</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   
			   	<li style="background-image: url(assets/Gambar/home1-3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">New</h1>
					   					<h2 class="head-2">Arrival</h2>
					   					<h2 class="head-3">up to 30% off</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
			<!-- end aside -->
			<!-- home bg-fixed-->
		<div id="bg-fixed" style="background-image: url(assets/gambar/logo/home/home.jpg);">
			<div class="colorlib-shop" id="jumb-color">
				<!-- seller -->
				<div id="h-seller">
					<div class="row">
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/gambar/logo/home/1.new-arrival.png');?>">
							<div id="p-seller-best">
								
									Shop New Arrivals
									<button class="btn-seller btn btn-warning"><i class="icon-arrow-up2"></i></button>
								
							</div>
						</div>
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/gambar/logo/home/2.Best-Seller.png');?>">
							<div id="p-seller-best">
								<div class="caption">
									Shop Best Seller
									<button class="btn-seller btn btn-warning"><i class="icon-arrow-up2"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/gambar/logo/home/3.Find-Store.png');?>">
							<div id="p-seller-best">
								<div class="caption">
									Find Our Stores
									<button class="btn-seller btn btn-warning"><i class="icon-arrow-up2"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-1">
						</div>
						<div class="col-lg-5">
							<p id="playit-left">
								Play it<br> cool,
								<br><p class="anywhere">Anywhere</p>
								<br><br>
								<h5>Emba Jeans existed since 1968 and become one of the most popular brand in the national market. Producing high-end quality denim and clothes by using only best materials.</h5>
							</p>
							
						</div>
						<div class="col-lg-4">
							<img src="<?php echo base_url('assets/gambar/logo/home/4.Play-it-cool.png');?>" class="img img-responsive img-playit">
						</div>
						<div class="col-lg-2" style="background-color : rgb(232, 230, 230, 1);">
						</div>
					</div>
					<div class="row" id="row-playit">
							
					</div>
					
				</div>
				<!-- end seller -->
			</div><!-- colorlib-shop, jumb-color -->
				
				<!-- home-4 -->
				<div class="colorlib-shop home-4">
				<div class="container">
					<!-- new arrival -->
					<div class="row">
						<div class="col-md-6 col-md-offset-3 box text-center colorlib-heading" id="item-sell">
							<h2><span>Barang baru</span></h2>
						<!-- <p> We Love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind teks.</p> -->
						</div>
					</div>
					<div class="row">
						<?php
						foreach ($barang as $key_barang => $value_barang) {
						?>
						<div class="col-md-3 col-xs-6 text-center
						">
							<div class="product-entry">
								<div class="product-img" style="background-image: url('uploads/<?php echo $value_barang->gambar_depan;?>');">
									<p class="tag"><span class="new">New</span></p>
									<div class="cart">
										<!-- <p><span><a href="#"><i>Tampilan Cepat</i></a></span></p> -->
										<p>
												<span class="addtocart"><a href="#javascript(0);" class="add_cart" data-produkid="<?php echo $value_barang->id;?>" data-mac="<?php echo $mac;?>" data-produkharga="<?php echo $value_barang->harga;?>" data-user="<?php echo $session['id'];?>" data-qty="1"><i class="icon-shopping-cart"></i></a></span> 
												<span><a href="<?php echo site_url('Shop/single/'.$value_barang->id);?>"><i class="icon-eye"></i></a></span> 
												<span><a href="#javascript(0);" class="add_love" data-user="<?php echo $session['id'];?>" data-barang="<?php echo $value_barang->id;?>" data-mac="<?php echo $mac;?>"><i class="icon-heart3"></i></a></span>
												<?php
												if(!empty($session['id'])){
													?>
													<span><a href="#javascript(0);" class="add_wish" data-user="<?php echo $session['id'];?>" data-barang="<?php echo $value_barang->id;?>"><i class="icon-bar-chart"></i></a></span>
													<?php
												}
												?>
												
										</p>
									</div>
								</div>
							</div>
						</div>
						<?php							
						}
						?>
						
						<center><button class="btn btn-warning btn-all-shop">Shop All</button></center>
					</div>
					<!-- end new arrival -->
					<!-- best seller -->
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center colorlib-heading" id="item-sell">
								<h2><span>Best Seller</span></h2>
							
							</div>
						</div>
						<div class="row" id="best-seller">
						<div class="col-md-3 col-xs-6 text-center
						">
							<div class="product-entry">
								<div class="product-img" style="background-image: url('../store/images/item-5.jpg');">
									<p class="tag"><span class="new">New</span></p>
									<div class="cart">
										<p><span><a href="#"><i>Tampilan Cepat</i></a></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 text-center
						">
							<div class="product-entry">
								<div class="product-img" style="background-image: url('../store/images/item-5.jpg');">
									<p class="tag"><span class="new">New</span></p>
									<div class="cart">
										<p><span><a href="#"><i>Tampilan Cepat</i></a></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 text-center
						">
							<div class="product-entry">
								<div class="product-img" style="background-image: url('../store/images/item-5.jpg');">
									<p class="tag"><span class="new">New</span></p>
									<div class="cart">
										<p><span><a href="#"><i>Tampilan Cepat</i></a></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 text-center
						">
							<div class="product-entry">
								<div class="product-img" style="background-image: url('../store/images/item-5.jpg');">
									<p class="tag"><span class="new">New</span></p>
									<div class="cart">
										<p><span><a href="#"><i>Tampilan Cepat</i></a></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<center style="padding-bottom: 40px;"><button class="btn btn-warning btn-all-shop">Shop All</button></center>
						<!-- end best seller -->

					<!-- cover -->
					<img src="<?php echo base_url('assets/Gambar/banner.jpg');?>" class="img img-responsive" style="width: 100%;">
					<!-- end cover -->

						<!-- our story -->
						<!-- <div class="row">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-8" id="our-insta">
								<div class='sk-instagram-feed' data-embed-id='15505'></div><script src='https://www.sociablekit.com/app/embed/instagram-feed/widget.js'></script>
							</div>
							<div class="col-lg-2">
							</div>
						</div> -->
						<!-- end our story -->

				</div>
			</div>
				<!-- home-4 -->
			
		</div>
			<!-- end bg-fixed -->
		<!-- end main page -->

	</div><!-- page -->

	</body>
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

	  $(document).ready(function() {
	  	$('.add_cart').click(function() {
	  		var id_barang = $(this).data('produkid');
	  		var harga = $(this).data('produkharga');
	  		var qty = $(this).data('qty');
	  		var mac = $(this).data('mac');
	  		var id_user = $(this).data('user');
	  		//var qty
	  		$.ajax({
	  			url: '<?php echo site_url('cart/ins_cart');?>',
	  			type: 'POST',
	  			data: {id_barang: id_barang, harga : harga, qty : qty, mac : mac, id_user : id_user},
	  		})
	  		.done(function() {
	  			console.log("success");
	  			$('#jumlah_cart').load("<?php echo site_url('cart/count_cart/'.$home);?>");
	  		})
	  		.fail(function() {
	  			console.log("error");
	  		})
	  		.always(function() {
	  			console.log("complete");
	  		});
	  		
	  	});

	  	

	  });


	  $(document).ready(function() {
	  	$('.add_wish').click(function() {

	  		var id_user = $(this).data('user');
	  		var id_barang = $(this).data('barang');

	  		$.ajax({
	  				url: '<?php echo site_url('Wishlist/insert');?>',
	  				type: 'POST',
	  				data: {id_user: id_user, id_barang : id_barang},
	  			})
	  			.done(function() {
	  				console.log('success');
	  				
	  			})
	  			.fail(function() {
	  				alert("Silahkan Login Dahulu");
	  			})
	  			.always(function() {
	  				console.log("complete");
	  			});

	  			
	  		
	  	});

	  });

	   $(document).ready(function() {
	  	$('.add_love').click(function() {

	  		var id_user = $(this).data('user');
	  		var id_barang = $(this).data('barang');
	  		var mac = $(this).data('mac');

	  		$.ajax({
	  				url: '<?php echo site_url('Wishlist/love');?>',
	  				type: 'POST',
	  				data: {id_user: id_user, id_barang : id_barang, mac : mac},
	  			})
	  			.done(function() {
	  			
	  				console.log("success");
	  				
	  			})
	  			.fail(function() {
	  				alert("Silahkan Login Dahulu");
	  			})
	  			.always(function() {
	  				console.log("complete");
	  			});

	  			
	  		
	  	});

	  });


	</script>

</html>