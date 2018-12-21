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

	<!-- somnium-->
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
		<!-- aside -->
		<!-- <aside id="colorlib-hero">
			<div class="flexslider">
				
				<ul class="slides">
			   	<li style="background-image: url('<?php echo base_url("assets/store/images/img_bg_1.jpg");?>');">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
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
			   	<li style="background-image: url('<?php echo base_url("assets/store/images/img_bg_2.jpg");?>');">
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
			   	<li style="background-image: url('<?php echo base_url("assets/store/images/img_bg_3.jpg");?>');">
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
		</aside> -->
		<br><br><br>
				<img src="<?php echo base_url('assets/Gambar/banner.jpg');?>" class="img img-responsive" style="width: 100%;">
			<!-- end aside -->

		<div class="colorlib-shop" id="shop-aside">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-push-2" id="shop-1">
						<div class="row row-pb-lg">
						<div class="row">
							<div class="col-lg-9">
								<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
							</div>
							<div class="col-lg-3">
								<form>
									<select class="form-control">
										<option> Harga Turun </option>
										<option> Harga Naik</option>
										<option> Terbaru</option>
										<option> Diskon</option>
									</select>
								</form>
								<br>
							</div>
						</div>
							
						
							<?php
							foreach ($barang as $key_barang => $value_barang) {
							?>
							<div class="col-md-3 col-xs-6 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(<?php echo base_url('uploads/'.$value_barang->gambar_depan);?>);">
										<p class="tag"><span class="new">New</span></p>
										<div class="overlay">
											<div class="product-img" style="background-image: url(<?php echo base_url('uploads/'.$value_barang->gambar_belakang);?>);">
											</div>
										</div>
										<div class="cart">
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
									<div class="desc">
										<h3><a href="#"><?php echo $value_barang->barangnama;?></a></h3>
										<p class="price"><span>Rp.<?php echo number_format($value_barang->harga,2);?></span></p>
									</div>
								</div>
							</div>
							<?php
							}
							?>

							
						</div>
						<div class="row">
							<div class="col-md-12">
								<?php echo $this->pagination->create_links();?>
							</div>
						</div>
					</div>

					<!-- background kanan -->
					<form>
					<div class="col-md-2 col-md-pull-10" id="side-bar">
						<div class="sidebar">
							<h4 id="font-shop-koleksi" class="text-center">Belanja Menurut</h4>
							<div class="side">
								<div class="fancy-collapse-panel">
			                  <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			                     
			                     <div class="panel panel-default">
			                     	<div class="panel-heading">
			                     		<div class="panel-body" id="headingTwo"> -->
			                     			<h4 class="text-center" style="color:white">Koleksi</h4>
			                     			<div class="row">
			                     				<div class="col-md-1">
			                     					<input type="checkbox" name="cb[]">
			                     				</div>
			                     				<div class="col-md-7">
			                     					<label style="color:white">Semua</label>
			                     				</div>
			                     				<div class="col-md-1">
			                     					<input type="checkbox" name="cb[]">
			                     				</div>
			                     				<div class="col-md-7">
			                     					<label style="color:white">Kemeja Pria</label>
			                     				</div>
			                     				<div class="col-md-1">
			                     					<input type="checkbox" name="cb[]">
			                     				</div>
			                     				<div class="col-md-7">
			                     					<label style="color:white">Barang Baru</label>
			                     				</div>
			                     				<div class="col-md-1">
			                     					<input type="checkbox" name="cb[]">
			                     				</div>
			                     				<div class="col-md-7">
			                     					<label style="color:white">Jaket</label>
			                     				</div>
			                     				<div class="col-md-1">
			                     					<input type="checkbox" name="cb[]">
			                     				</div>
			                     				<div class="col-md-7">
			                     					<label style="color:white">Celana Pria</label>
			                     				</div>
			                     			</div>
			                     		<!-- </div>
			                     	</div>
			                         <div class="panel-heading" role="tab" id="headingTwo">
			                             <h4 class="panel-title">
			                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">KOLEKSI
			                                 </a>
			                             </h4>
			                         </div>
			                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			                             <div class="panel-body">
			                                <ul>
			                                 	<li><a href="#">Semua</a></li>
			                                 	<li><a href="#">Kemeja Pria</a></li>
			                                 	<li><a href="#">New Arrivals</a></li>
			                                 	<li><a href="#">Jaket</a></li>
			                                 	<li><a href="#">Celana Pria</a></li>
			                                 </ul>
			                             </div>
			                         </div>
			                     </div>
			                     
			                  </div>-->
			              	 </div>
							</div>
							<div class="side">
								<h2 id="font-shop-koleksi">Price Range</h2>
								<div class="form-price-range-filter">
								    <center><label id="show-price" class='text-center' style="color:white; text-align : center;"><?php echo "Min Price ".number_format($minmax->min);?></label></center>
								    <input type="range" id="range-harga" min="<?php echo $minmax->min;?>" onchange="myrangemin();" max="<?php echo ($minmax->avg);?>">
								    <center><label id="show-price2" style="color:white; text-align: center;"><?php echo "Max Price ".number_format($minmax->avg);?></label></center>
								    <input type="range" id="range-harga2" min="<?php echo $minmax->avg;?>" onchange="myrangemax();" max="<?php echo $minmax->max;?>">
								</div>
							</div>
							<div class="side">
								<h2 id="font-shop-koleksi">Color</h2>
								<div class="color-wrap">
									<p class="color-desc">
										<a href="#" class="color color-1"></a>
										<a href="#" class="color color-2"></a>
										<a href="#" class="color color-3"></a>
										<a href="#" class="color color-4"></a>
										<a href="#" class="color color-5"></a>
									</p>
								</div>
							</div>
							<div class="side">
								<h2 id="font-shop-koleksi">Size</h2>
								<div class="size-wrap">
									<p class="size-desc">
										<a href="#" class="size size-1">xs</a>
										<a href="#" class="size size-2">s</a>
										<a href="#" class="size size-3">m</a>
										<a href="#" class="size size-4">l</a>
										<a href="#" class="size size-5">xl</a>
										<a href="#" class="size size-5">xxl</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					</form>
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
	  			alert('Sukses Menambahkan Cart');
	  		})
	  		.fail(function() {
	  			console.log("error");
	  		})
	  		.always(function() {
	  			console.log("complete");
	  		});
	  		
	  	});

	  	$('#jumlah_cart').load("<?php echo site_url('cart/count_cart');?>");

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
	  				if(empty(iduser)){
	  					alert("Silahkan Login Dahulu");
	  					window.location.href="login";
	  				}else{
	  					console.log("success");
	  				}
	  				
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

	  function myrangemin(){
	  	var myvalue = $('#range-harga').val();
		document.getElementById("show-price").innerHTML = "Min Price " + myvalue.toLocaleString();
	  	console.log(myvalue);
	  }

	  function myrangemax(){
	  	var myvalue = $('#range-harga2').val();
	  	document.getElementById('show-price2').innerHTML = "Max Price " + myvalue.toLocaleString();
	  }

</script>