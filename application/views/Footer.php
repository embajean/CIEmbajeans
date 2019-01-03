<?php
	$true = (isset($home) == 'home') ? 1: 2;
?>

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
								<li><a href="<?php echo base_url();?>" style="color: grey; font-size: 16px;">Home</a></li>
								<li><a href="<?php echo site_url('Shop');?>" style="color: grey; font-size: 16px;">Shop</a></li>
								<li><a href="<?php echo site_url('Store');?>" style="color: grey; font-size: 16px;">Store</a></li>
								<li><a href="#" style="color: grey; font-size: 16px;">Partnership</a></li>
								<li><a href="<?php echo site_url('About');?>" style="color: grey; font-size: 16px;">About</a></li>
								<li><a href="<?php echo site_url('Contact');?>" style="color: grey; font-size: 16px;">Contact</a></li>
								
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

	</body>
</html>


<script>

	/*$(document).ready(function() {
		
		$('#cartnavbar').load("<?php echo site_url('cart/count_cart_navbar');?>");
	});*/

	$("#koleksi").toggle();
	$("#price").toggle();
	$("#color").toggle();
	$("#size").toggle();

	$('#tampil_koleksi').on('click', function(e){
		
		$("#koleksi").fadeToggle('slow');

	});

	$('#tampil_price').on('click', function(e){
		
		$("#price").fadeToggle('slow');

	});

	$('#tampil_color').on('click', function(e){
		
		$("#color").fadeToggle('slow');

	});

	$('#tampil_size').on('click', function(e){
		
		$("#size").fadeToggle('slow');

	});
	

	  $(document).ready(function() {

	  	//listbarang
	  	//koleksi shop
	  	$("#default").click(function() {
	  		$("#barang-list").load('<?php echo site_url("Shop/Shop_default");?>');
	  	});
	  	<?php
	  		for($i = 1; $i <= 3; $i++){
	  	?>
	  		$("#list-size<?php echo $i;?>").click(function() {
	  			var size = $(this).data('size');
	  			$.ajax({
	  				url: '<?php echo site_url('Shop/Shop_size');?>',
	  				type: 'POST',
	  				data: {size: size},
	  				success:function(data){
	  					$("#barang-list").html(data);
	  				}
	  			})	  			
	  		});
	  	<?php
	  		}

	  		if(!empty($kategori)){
	  			foreach ($kategori as $key_kategori => $value_kategori) {
	  			?>
	  				$("#list-kategori<?php echo $key_kategori;?>").click(function() {
	  					var kategori = $("#list-kategori<?php echo $key_kategori;?>").val();
	  					$.ajax({
				  			url: '<?php echo site_url('Shop/get_shop_by_kategori');?>',
				  			type: 'POST',
				  			data: {kategori: kategori},
				  			success:function(data){
				  				$("#barang-list").html(data);
				  			}
				  		})
	  				});

	  			<?php
	  			}
	  		}
	  	?>

	  	//warna shop
	  	<?php
	  	if(!empty($warna)){
	  		foreach ($warna as $key_warna => $value_warna) {
	  		?>
	  		$("#list-warna<?php echo $key_warna;?>").click(function() {
	  			var warna = $(this).data('warna');
	  			$.ajax({
	  				url: '<?php echo site_url('Shop/get_shop_by_warna');?>',
	  				type: 'POST',
	  				data: {warna: warna},
	  				success:function(data){
	  					$("#barang-list").html(data);
	  				}
	  			})
	  			
	  		});
	  	<?php
	  		}
	  	}
	  	?>
	  	//end list barang

	  	<?php
	  		if(!empty($session)){ //if session true
	  	?>
	  		$('.add_cart').click(function() {
		  		var id_barang = $(this).data('produkid');
		  		var harga = $(this).data('produkharga');
		  		var qty = $(this).data('qty');
		  		var mac = $(this).data('mac');
		  		var id_user = $(this).data('user');
		  		var _postStat = '<?php echo $true;?>';
		  		
		  		//var qty
		  		$.ajax({
		  			url: '<?php echo site_url('cart/ins_cart');?>',
		  			type: 'POST',
		  			data: {id_barang: id_barang, harga : harga, qty : qty, mac : mac, id_user : id_user},
		  		})
		  		.done(function() {
		  			alert('Sukses Menambahkan Cart');
		  			//console.log(_postStat);
		  				$('#jumlah_cart').load("<?php echo site_url('cart/count_cart');?>");
		  				if(_postStat == 1){

		  					$('#cartnavbar').load("<?php echo site_url('cart/navbarhome');?>");

		  				}else{

		  					$('#cartnavbar').load("<?php echo site_url('cart/navbarshop');?>");
		  					
		  				}
		  		})
		  		.fail(function() {
		  			console.log("error");
		  		})
		  		.always(function() {
		  			console.log("complete");
		  		});
		  		
		  	});

	  	<?php
	  		}else{
	  	?>
	  		$("#modallogin").on('show.bs.modal', function(e){

	  			var id_barang = $(e.relatedTarget).data('produkid');
		  		var harga = $(e.relatedTarget).data('produkharga');
		  		var qty = $(e.relatedTarget).data('qty');
		  		var mac = $(e.relatedTarget).data('mac');
		  		var id_user = $(e.relatedTarget).data('user');
		  		var _postStat = '<?php echo $true;?>';

		  		$.ajax({
		  			url: '<?php echo site_url('Cart/cart_login');?>',
		  			type: 'POST',
		  			data: {id_barang : id_barang, harga : harga, qty : qty, mac : mac, id_user : id_user, _postStat : _postStat},
		  			
		  			success:function(data){
		  				$(".fetchdata-cartlogin").html(data);
		  			}

		  		})
		  		

	  		});

	  	<?php
	  		}
	  	?>

	  	

	  	$('#txt_color').mouseenter(function(event) {
	  		var txt_color = $(this).data('color');
	  		$('#showcolor').html(" "+txt_color);
	  	});

	  	$('#txt_color').mouseleave(function(event) {
	  		$('#showcolor').html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
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