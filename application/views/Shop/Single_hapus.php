<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $barangby->barangnama;?></title>
	<link href='<?php echo base_url('assets/gambar/logo/logoemba.png');?>' rel='shortcut icon'>
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

	<!-- slider -->
	<link rel="stylesheet" href="<?php echo base_url('assets/light/');?>css/flexslider.css" type="text/css" media="screen" />


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
								<li><a href="#"><i class="icon-shopping-cart">(<?php echo $cart['jumlah'];?>)</i></a></li>
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
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-xs-6">
									<left><p>Beranda / Shop / <?php echo $barangby->barangnama;?></p></left>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-6">
									<right class="text-right"><p><a href="#javascript(0);" style="color:black"><span class="icon-arrow-left3"></span>Sebelum</a> | <a href="#javascript(0);" style="color:black">Selanjutnya<span class="icon-arrow-right3"></span></a></p></right>
								</div>
								<div class="col-md-6">
									<div class="product-entry">
										<div class="product-img" id="pc" style="background-image: url('<?php echo base_url('uploads/'.$barangby->gambar_depan);?>'");>
											<p class="tag"><span class="sale">Sale</span></p>
										</div>
										<div class="thumb-nail">
											
											<a href="#javascript(0);" class="thumb-img" style="background-image: url('<?php echo base_url('uploads/'.$barangby->gambar_depan);?>" id="pc1"></a>
											<a href="#javascript(0);" class="thumb-img" style="background-image: url('<?php echo base_url('uploads/'.$barangby->gambar_belakang);?>');" id="pc2"></a>
											<a href="#javascript(0);" class="thumb-img" style="background-image: url('<?php echo base_url('uploads/'.$barangby->gambar_samping);?>');" id="pc3"></a>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="desc">
										<h3><?php echo $barangby->barangnama;?></h3>
										<p class="price">
											<span>Rp. <?php echo number_format($barangby->harga,2);?></span> 
											<!-- <span class="rate text-right">
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-half"></i>
												(74 Rating)
											</span> -->
										</p>
										<!-- <p> <textarea readonly cols="60" rows="12"><?php echo $barangby->deskripsi;?></textarea> </p> -->
										<?php
											$des = explode(PHP_EOL,$barangby->deskripsi);
											foreach ($des as $key => $value) {
												echo $value.'<br>';
											}
										?>
									<!-- 	<div class="color-wrap">
											<p class="color-desc">
												Color: <br>	
												<a href="#" class="color color-1"></a>
												<a href="#" class="color color-2"></a>
												<a href="#" class="color color-3"></a>
												<a href="#" class="color color-4"></a>
												<a href="#" class="color color-5"></a>
											</p>
										</div> -->
										<div class="size-wrap">
											<p class="size-desc">
												Size: <br>
												<?php
													$size = explode(',', $barangby->size);
													foreach ($size as $key => $value) {
														echo "<a href='#' class='size size-$key'>$value</a>";
													}
												?>
											
											</p>
										</div>
										
										<div class="row row-pb-sm">
											<div class="col-md-6">
			                                    <div class="input-group">
			                                    	<span class="input-group-btn">
			                                       	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
			                                          <i class="icon-minus2"></i>
			                                       	</button>
			                                   		</span>
			                                    	<input type="jumlah" id="quantity" name="qty" class="form-control input-number" value="1">
			                                    	<span class="input-group-btn">
			                                       	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
			                                            <i class="icon-plus2"></i>
			                                        </button>
			                                    	</span>
			                                 	</div>
                        					</div>
										</div>
										<!-- <p><a href="#" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p> -->
										<p>
										<button class="add_cart btn btn-primary btn-addtocart" data-produkid="<?php echo $barangby->id;?>" data-produkharga="<?php echo $barangby->harga;?>" data-mac="<?php echo $mac;?>" data-user="<?php echo $session['id'];?>"><i class="icon-shopping-cart"> Add To Cart</i></button>
										<button class="btn btn-default btn-addtocart go-cart">Go to Cart</button>
										</p>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Deskripsi</a></li>
									<!-- <li><a data-toggle="tab" href="#manufacturer">Manufacturer</a></li> -->
									<!-- <li><a data-toggle="tab" href="#review">Reviews</a></li> -->
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										<div class="row">
											<div class="col-md-6 col-xs-6">
												Detail Ukuran:<br>
												<?php 
													$detail_ukuran = explode(PHP_EOL,$barangby->detailsize);
													foreach ($detail_ukuran as $key_ukuran => $value_ukuran) {
														echo $value_ukuran.'<br>';
													}
												?>
											</div>
											<div class="col-md-6 col-xs-6">
												Cara Pencucian :<br>
												<?php
													$carapencucian = explode(PHP_EOL, $barangby->Petunjukcuci);
													foreach ($carapencucian as $key => $value) {
														echo $value.'<br>';
													}
												?>
											</div>
										</div>
								  
					         		</div>
				        		</div>
							</div>

							<!-- <div id="detail_cart"></div> -->

						</div>
					</div>
				</div>
		</div>
		<!-- end main page-->

		<!-- recom -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Similar Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-5.jpg');?>');">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-6.jpg');?>');">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-7.jpg');?>');">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-8.jpg');?>');">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end recomm -->

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

	</body>
</html>

<script type="text/javascript">

		$(document).ready(function(){
			$("#pc1").click(function(){
				$('#pc').css('background-image', 'url("<?php echo base_url('uploads/'.$barangby->gambar_depan);?>")');
			});
		});

		$(document).ready(function(){
			$("#pc2").click(function(){
				$('#pc').css('background-image', 'url("<?php echo base_url('uploads/'.$barangby->gambar_belakang);?>")');
			});
		});

		$(document).ready(function(){
			$("#pc3").click(function(){
				$('#pc').css('background-image', 'url("<?php echo base_url('uploads/'.$barangby->gambar_samping);?>")');
			});
		});

		$(document).ready(function() {
			$('.go-cart').click(function() {
				location.href="<?php echo site_url('cart/mycart/');?>";
			});
		});
	

	$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined

		            if(quantity <= <?php echo $barangby->stok;?>){
		            	$('#quantity').val(quantity + 1);	
		            }
		            

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});

	$(document).ready(function() {
		$('.add_cart').click(function() {
			var id_barang = $(this).data('produkid');
			var id_user = $(this).data('user');
			var harga = $(this).data('produkharga');
			var qty  = $('#quantity').val();
			var mac = $(this).data('mac');
			//var qty
			$.ajax({
				url: '<?php echo site_url('cart/ins_cart');?>',
				type: 'POST',
				data: {id_barang : id_barang, harga : harga, qty : qty, mac : mac},
			})
			.done(function(data) {
				alert('Sukses menambahkan Cart');
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});

		//load vart
		$('#detail_cart').load("<?php echo site_url('shop/load_cart');?>");

		//del cart
		$(document).on('click','.hapus_cart', function(){
			var row_id = $(this).data('produkid');
			$.ajax({
				url: '<?php echo site_url('shop/hapus_cart');?>',
				type: 'POST',
				data: {row_id: 'row_id'},
			})
			.done(function() {
				$('#detail_cart').html(data);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	});
	
</script>
