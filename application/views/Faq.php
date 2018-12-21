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

	<!-- somnium-->
	<link rel="stylesheet" href="<?php echo base_url('assets/store/');?>css/CustomSomnium.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/store/');?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		#size{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
		#reseler{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;

		}
		#harga{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;

		}
		#storefaq{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
		#online{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
		#flash{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
		#pesanan{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
		#resi{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
		#jne{
			padding-right : 15px;
			padding-left : 20px;
			font-family : "Arial";
			font-size : 15px;
		}
	</style>

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
									<a href="<?php echo site_url('Shop/Index');?>">Shop</a>
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
		
	<div class="head-shop" id="bg-shop">
		

		<div class="colorlib-shop">
			<div class="container">
				<div id="policy">
					<div class="row">
						<h2 class="text-center"><img src="<?php echo base_url('assets/Gambar/Logo/faq.PNG');?>"></h2>
						<div class="col-md-6 col-md-offset-3">
							<h4><a href="#javascript(0);" id="tampil_size" style="color:grey; font-family : 'Arial'">1. Apakah ada size chart untuk produk-produk EMBA Jeans?</a></h4>
							<div id="size">
								Size chart untuk produk celana denim EMBA Jeans, antara lain:<br>
								<li>27 in</li>
								<li>28 in</li>
								<li>29 in</li>
								<li>30 in</li>
								<li>31 in</li>
								<li>32 in</li>
								<li>33 in</li>
								<li>34 in</li>
								<li>36 in</li>
								<li>38 in</li>
								<br>
								-	Size chart untuk produk jaket denim dan non denim EMBA Jeans, antara lain:<br>
								<li>M</li>
								<li>L</li>
								<li>XL</li><br>
								-	Size chart untuk produk baju EMBA Jeans, antara lain:<br>
								<li>M</li>
								<li>L</li>
								
							</div>

							<h4><a href="#javascript(0);" id="tampil_reseler" style="color:grey; font-family : 'Arial'">2. Bagaimana caranya menjadi reseller EMBA Jeans?</a></h4>
							<div id="reseler">
								Untuk menjadi partnership (reseller, dropshipper) EMBA Jeans, kami menyediakan form berisi pengisian data diri dan juga data store Anda. Berikut adalah form yang dapat Anda unduh/isi.<br><br>
							</div>

							<h4><a href="#javascript(0);" id="tampil_harga" style="color:grey; font-family : 'Arial'">3. Berapa kisaran harga EMBA Jeans?</a></h4>
							<div id="harga">
								Untuk soal harga, EMBA Jeans berkisar<br><br>
							</div>

							<h4><a href="#javascript(0);" id="tampil_store" style="color: grey; font-family : 'Arial'">4. Dimana saja saya dapat menemukan produk EMBA Jeans jika tidak ingin berbelanja online?</a></h4>
							<div id="storefaq">
								Anda dapat menemukan produk EMBA Jeans di offline store yang telah menjadi partnership kami, antara lain Ramayana Departemen Store dan Matahari Departemen Store<br><br>
							</div>

							<h4><a href="#javascript(0);" id="tampil_online" style="color: grey; font-family : 'Arial'	">5. Dimana saya dapat menemukan dan membeli produk EMBA Jeans secara online?</a></h4>
							<div id='online'>
							
									<div class="row" style="background-color: white;">
										<div class="col-md-6">
											<a href="https://www.zalora.co.id/emba-jeans/?brandRedirect=1&classifier=false&q=EMBA+JEANS" target="_blank">
												<img src="<?php echo base_url('assets/Gambar/zalora.PNG');?>" class="img img-responsive">
											</a>
											<a target="_blank" href="https://www.mataharimall.com/products?category_id=&q=EMBA%20JEANS&page=1&per_page=36&fq=&sort=date%20DESC&store_id=">
												<img src="<?php echo base_url('assets/Gambar/matahari.PNG');?>" class="img img-responsive">
											</a>
											<a target="_blank" href="https://shopee.co.id/embajeansofficial">
												<img src="<?php echo base_url('assets/Gambar/Shopee.PNG');?>" class="img img-responsive">
											</a>
										</div>
										<div class="col-md-6">
											<a target="_blank" href="http://www.vipplaza.co.id/catalogsearch/result/index/?dir=desc&order=insolr_created_at&q=EMBA+JEANS">
												<img src="<?php echo base_url('assets/Gambar/plaza.PNG');?>" class="img img-responsive">
											</a>
											<a target="_blank" href="https://www.blibli.com/jual/emba-jeans?s=EMBA+JEANS">
												<img src="<?php echo base_url('assets/Gambar/blibli.PNG');?>" class="img img-responsive">
											</a>
											<a target="_blank" href="https://www.tokopedia.com/emba-jeans?source=universe&st=product">
												<img src="<?php echo base_url('assets/Gambar/tokped.PNG');?>" class="img img-responsive">
											</a>
										</div>
									</div>
							</div>
							<h4><a href="#javascript(0);" id="tampil_flash" style="color: grey; font-family : 'Arial'	">6. Apakah promo flash sale bisa digabung dengan promo yang lainnya?</a></h4>
							<div id="flash">
								Tidak bisa, untuk promo flash sale tidak dapat digabung dengan promo lainnya.<br><br>
							</div>
							<h4><a href="#javascript(0);" id="tampil_pesananku" style="color: grey; font-family : 'Arial'	">7. Mengapa pesananku tidak dapat diproses ketika barang sudah habis?</a></h4>
							<div id="pesanan">
								Pihak online store yang bekerja sama dengan kami, akan otomatis menolak pesanan Anda ketika barang itu sudah habis terjual, Hal itu dimaksudkan untuk menghindari miss komunikasi Antara penjual dan pembeli.<br><br>
							</div>
							<h4><a href="#javascript(0);" id="tampil_resi" style="color: grey; font-family : 'Arial'	">8. Apakah saya boleh meminta nomor resinya? Karena saya sudah transfer kemarin.</a></h4>
							<div id="resi">
								Perlu diketahui, bahwa: <br>
								1.	Jika Anda berbelanja di online store yang menjadi partner kami, Anda akan otomatis menerima resi terkait dengan online store tersebut <br>
								2.	Untuk resinya, akan menjadi tanggung jawab online store tersebut. <br><br>
							</div>
							<h4><a href="#javascript(0);" id="tampil_jne" style="color: grey; font-family : 'Arial'	">9. Apakah Emba Jeans hanya menyediakan jasa pengiriman lewat JNE Reg?</a></h4>
							<div id="jne">
								Iya benar, Kami hanya menyediakan pengiriman lewat JNE Reg, alasannya karena barang tiba bisa lebih cepat.
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
		

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

<script>

	$("#size").toggle();
	$("#reseler").toggle();
	$("#harga").toggle();
	$("#storefaq").toggle();
	$("#online").toggle();
	$("#flash").toggle();
	$("#pesanan").toggle();
	$("#resi").toggle();
	$("#jne").toggle();
	
	$('#tampil_size').on('click', function(e){
		
		$("#size").fadeToggle('slow');

	});

	$('#tampil_reseler').on('click', function(e){
		
		$("#reseler").fadeToggle('slow');

	});

	$('#tampil_harga').on('click', function(e){
		
		$("#harga").fadeToggle('slow');

	});

	$('#tampil_store').on('click', function(e){
		
		$("#storefaq").fadeToggle('slow');

	});

	$('#tampil_online').on('click', function(e){
		
		$("#online").fadeToggle('slow');

	});

	$('#tampil_flash').on('click', function(e){
		
		$("#flash").fadeToggle('slow');

	});

	$('#tampil_pesananku').on('click', function(e){
		
		$("#pesanan").fadeToggle('slow');

	});

	$('#tampil_resi').on('click', function(e){
		
		$("#resi").fadeToggle('slow');

	});

	$('#tampil_jne').on('click', function(e){
		
		$("#jne").fadeToggle('slow');

	});

</script>