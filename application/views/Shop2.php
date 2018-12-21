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
										<select class="form-control" id="sel-shop">
											<option>Sortir Menurut</option>
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
							if(!empty($barang)){
								$date = date('Y-m-d');
								foreach ($barang as $key_barang => $value_barang) {

									/*if($date <= $value_barang->lim_diskon){

										$diskon = ($diskon / 100) * $value_barang->harga;

									}*/

									$diskon = ($date <= $value_barang->lim_diskon) ? $value_barang->harga - (($value_barang->diskonpersen / 100) * $value_barang->harga ) : $value_barang->harga;
									/*var_dump($diskon);
									die;*/

								?>
								<div class="col-md-3 col-xs-6 text-center">
									<div class="product-entry">
										<a href="<?php echo site_url('Shop/single/'.$value_barang->id);?>">
											<div class="product-img" style="background-image: url(<?php echo base_url('uploads/'.$gambar[$key_barang][0]->gambar_product);?>);">
												<p class="tag"><span class="new">New</span></p>
												<div class="overlay">
													<div class="product-img" style="background-image: url(<?php echo base_url('uploads/'.$gambar[$key_barang][1]->gambar_product);?>)">
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
										</a>
										<div class="desc">
											<h3><a href="#"><?php echo $value_barang->barangnama;?></a></h3>
											<?php

												if($date <= $value_barang->lim_diskon){
													if(!empty($value_barang->diskonpersen)){

													echo '<p class="price"><span class="sale">Rp'.number_format($value_barang->harga,2).'</span>';
													echo '<span> Rp'.number_format($diskon,2).'</span</p>';

													}else{
														
														echo '<p class="price"><span class="sale">Rp'.number_format($value_barang->harga,2).'</span>';
														echo '<span> Rp'.number_format($value_barang->diskonangka,2).'</span</p>';

													}

												}else{

													echo '<p class="price"><span>Rp.'.number_format($value_barang->harga,2).'</span></p>';

												}

											?>
										</div>
									</div>
								</div>
								<?php
								}//end foreach

							}else{
								echo "Tidak ada Barang";
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
						<div class="sidebar" style="display : block;">
							<p id="font-shop-koleksi" class="text-center" style="margin-bottom: -10px;">Belanja Menurut</p>
							<div class="row">
								<hr style="width: 160px;">
			                   	<p style="color:white; font-family: Arial; font-size : 15px;">Koleksi<span class="text-right" style="    padding-left: 95px;text-align: right"><a href="#javascript(0);" style="color: rgb(231, 228, 233);" id="tampil_koleksi"><i class="icon-plus-square"></i></a></span></p>
			                   	<div id="koleksi">
				                   	<div class='col-md-10'>
				                   		<input type='checkbox' name='cb[]' style='height:11px; border-radius:25px; -moz-border-radius:25px;'>
				                   		 <label style="color: rgb(231, 228, 233); font-size : 11px; font-family : Arial; text-decoration : underline;">Semua</label>
				                   	</div>
				                   	<?php
				                   		foreach ($kategori as $key_kategori => $value_kategori) {
				                   	?>
				                   		<div class='col-md-10'>
				                   			<input type='checkbox' name='cb[]' style="height : 11px;">
				                   			<label style='color:rgb(231, 228, 233); font-family : Arial; font-size : 11px; '><?php echo $value_kategori->kategorinama;?></label>
				                   		</div>
				            		 <?php
				                   		}
				                   	?>
			                   	</div>
							</div>
							<div class="row">
								<hr style="width: 160px; margin-top : -1px;">
								<p style="color:white; font-family: Arial; font-size : 15px;">Harga<span class="text-right" style="    padding-left: 102px;text-align: right"><a href="#javascript(0);" style="color: rgb(231, 228, 233);" id="tampil_price"><i class="icon-plus-square"></i></a></span></p>
								<div class="form-price-range-filter" id="price">
								    <center><label id="show-price" class='text-center' style="color:white; text-align : center;"><?php echo "Min Price ".number_format($minmax->min);?></label></center>
								    <input type="range" id="range-harga" min="<?php echo $minmax->min;?>" onchange="myrangemin();" max="<?php echo ($minmax->avg);?>">
								    <center><label id="show-price2" style="color:white; text-align: center;"><?php echo "Max Price ".number_format($minmax->avg);?></label></center>
								    <input type="range" id="range-harga2" min="<?php echo $minmax->avg;?>" onchange="myrangemax();" max="<?php echo $minmax->max;?>">
								</div>
							</div>
							<div class="row">
								<hr style="width : 160px; margin-top: 6px; margin-bottom: 14px;">
								<p style="color:white; font-family: Arial; font-size : 15px;">Warna<span id="showcolor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="text-right" style="padding-left: 60px;text-align: right"><a href="#javascript(0);" style="color: rgb(231, 228, 233);" id="tampil_color"><i class="icon-plus-square"></i></a></span></p>
								<div class="color-wrap" id="color">
									<p class="color-desc">
										<a href="#" class="color color-1" id="txt_color" data-color="khaki" style="border-radius : 25px; background-color : khaki;"></a>
										<a href="#" class="color color-2" id="txt_color" data-color="white" style="border-radius : 25px; background-color : white"></a>
										<a href="#" class="color color-3" style="border-radius : 25px;"></a>
										<a href="#" class="color color-4" style="border-radius : 25px;"></a>
										<a href="#" class="color color-5" style="border-radius : 25px;"></a>
										<a href="#" class="color color-1" style="border-radius : 25px; background-color : khaki;"></a>
										<a href="#" class="color color-2" style="border-radius : 25px;"></a>
										<a href="#" class="color color-3" style="border-radius : 25px;"></a>
										<a href="#" class="color color-4" style="border-radius : 25px;"></a>
										<a href="#" class="color color-5" style="border-radius : 25px;"></a>
									</p>
								</div>
							</div>
							<div class="row">
								<hr style="width : 160px; margin-top: -5px;">
								<p style="color:white; font-family: Arial; font-size : 15px;">Ukuran<span class="text-right" style="    padding-left: 94px;text-align: right"><a href="#javascript(0);" style="color: rgb(231, 228, 233);" id="tampil_size"><i class="icon-plus-square"></i></a></span></p>
								<div class="size-wrap" id="size">
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

