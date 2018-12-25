<!-- main page -->
			<!-- aside -->
			<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				<?php
					foreach ($slider as $key_slider => $value_slider) {
				?>
					<li style="background-image: url(<?php echo base_url('slider/'.$value_slider->gambar);?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1 class="head-1"><?php echo $value_slider->head1;?></h1>
						   					<h2 class="head-2"><?php echo $value_slider->head2;?></h2>
						   					<h2 class="head-3"><?php echo $value_slider->head3;?></h2>
						   					<!--<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>-->
						   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
					   					</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				<?php
					}
				?>
			  	</ul>
		  	</div>
		</aside>
			<!-- end aside -->
			<!-- home bg-fixed-->
		<div id="bg-fixed" style="background-image: url(assets/Gambar/Logo/home/home.jpg);">
			<div class="colorlib-shop" id="jumb-color">
				<!-- seller -->
				<div id="h-seller">
					<div class="row">
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/Gambar/Logo/home/1.new-arrival.PNG');?>">
							<div id="p-seller-best">
								
									Shop New Arrivals
									<button class="btn-seller btn btn-warning"><i class="icon-arrow-up2"></i></button>
								
							</div>
						</div>
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/Gambar/Logo/home/2.Best-Seller.PNG');?>">
							<div id="p-seller-best">
								<div class="caption">
									Shop Best Seller
									<button class="btn-seller btn btn-warning"><i class="icon-arrow-up2"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<img class="img-responsive" id="img-seller" src="<?php echo base_url('assets/Gambar/Logo/home/3.Find-Store.PNG');?>">
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
						<div class="col-lg-6">
							<img src="<?php echo base_url('assets/Gambar/Logo/home/4.Play-it-cool.PNG');?>" class="img img-responsive img-playit">
						</div>
					</div>
					
					
				</div>
				<!-- new arrival -->
					<div class="row">
						<div class="col-md-6 col-md-offset-3 box text-center colorlib-heading" id="item-sell">
							<h2><span>Barang baru</span></h2>
						<!-- <p> We Love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind teks.</p> -->
						</div>
					</div>
					<div class="row">
						<?php
						if(empty($barang)){
							#echo 'Barang Kosong';
						}else{
							foreach ($barang as $key_barang => $value_barang) {
						
						
						?>
						<div class="col-md-3 col-xs-6 text-center
						">
							<div class="product-entry">
								<div class="product-img" style="background-image: url('uploads/<?php echo $gambar[$key_barang]->gambar_product;?>');">
									<p class="tag"><span class="new">New</span></p>
									<div class="cart">
										<!-- <p><span><a href="#"><i>Tampilan Cepat</i></a></span></p> -->
										<p>
												<span class="addtocart"><a href="#javascript(0);" class="add_cart" data-target='#modallogin' data-toggle='modal' data-produkid="<?php echo $value_barang->id;?>" data-mac="<?php echo $mac;?>" data-produkharga="<?php echo $value_barang->harga;?>" data-user="<?php echo $session['id'];?>" data-qty="1"><i class="icon-shopping-cart"></i></a></span> 
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
						}
						?>
						
						<center><button class="btn btn-warning btn-all-shop">Shop All</button></center>
					</div>
					<!-- end new arrival -->
					<!-- best seller -->
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center colorlib-heading" id="item-sell">
								<h2><span>Produk Terlaris</span></h2>
							
							</div>
						</div>
						<div class="row" id="best-seller">
    						<div class="col-md-3 col-xs-6 text-center
    						">
    							<div class="product-entry">
    								<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-5.jpg');?>');">
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
    								<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-5.jpg');?>');">
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
    								<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-5.jpg');?>');">
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
    								<div class="product-img" style="background-image: url('<?php echo base_url('assets/store/images/item-5.jpg');?>');">
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
				<!-- end seller -->
			</div><!-- colorlib-shop, jumb-color -->
				
				<!-- home-4 -->
				<div class="colorlib-shop">
				<div class="container" id="home-4">
					

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