<div class="colorlib-shop main-page" id="bg-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
							<h2>Tujuan kiriman</h2>
							<?php
								$expProv = explode(',', $datatransaksi['province_id']);
								$provinsi = $expProv['1'];

								$expCity = explode(',', $datatransaksi['city_id']);
								$city = $expCity['1'];

								$expCost = explode(',', $datatransaksi['cost']);
								$cost = $expCost[1];
								$etd = $expCost[2];
							?>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Provinsi</label>
											<input type="text" name="provinsi" class="form-control" value="<?php echo $provinsi;?>" disabled>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Kota</label>
											<input type="text" name="kota" class="form-control" value="<?php echo $city;?>" disabled>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Kurir</label>
											<input type="text" name="kurir" class="form-control" value="<?php echo $datatransaksi['kurir'];?>" disabled>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Estimasi Sampai</label>
											<input type="text" name="estimasi_hari" class="form-control" value="<?php echo $etd;?> Hari" disabled>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Alamat Tujuan</label>
											<textarea class="form-control" name="alamatujuan"><?php echo $datatransaksi['alamattujuan'];?></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Catatan</label>
											<textarea class="form-control" name="catatan"><?php echo $datatransaksi['catatan'];?></textarea>
										</div>
									</div>
								</div>
		         		   
					</div>
					<?php
						$subtotal = 0;
						$count = count($databarang['harga']);
						$qty = 0;
					?>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Cart Total(<?php echo $count;?>)</h2>
							<ul>
								<li>
									
									<ul>
										<?php
										
										/*echo $databarang['harga'][0];*/
										for ($key = 0; $key < $count; $key++) {
											
											echo '<li><span>'.$databarang['qty'][$key].' x '.$databarang['namabarang'][$key].'('.$databarang['size'][$key].')</span><span>Rp. '.number_format($databarang['harga'][$key],2).'</span></li>';
											$subtotal = $subtotal + ($databarang['qty'][$key] * $databarang['harga'][$key]);
											$qty = $qty + $databarang['qty'][$key];

										}

										
										/*echo $cost;
										die;*/
										?>
										<!-- <li><span>1 x Product Name</span> <span>$99.00</span></li>
										<li><span>1 x Product Name</span> <span>$78.00</span></li> -->
										<li><span>Subtotal</span> <span>Rp. <?php echo number_format($subtotal,2);?></span></li>
									</ul>
									
								</li>
								<li><span>Ongkos Kirim</span> <span>Rp. <?php echo number_format($cost,2);?></span></li>
								<li><span>Order Total</span> <span>Rp. <?php echo number_format($datatransaksi['subtotalall'],2);?></span></li>
							</ul>
						</div>
						<div class="cart-detail">
							<h2>Payment Method</h2>
							<form action="<?php echo site_url('ordering');?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-md-12">
									

										<?php
											for ($key = 0; $key < $count; $key++) {
												
												$sub = 0;

												echo "<input type='hidden' name='id_barang[]' value='".$databarang['id_barang'][$key]."'>";
												echo "<input type='hidden' name='sku[]' value='".$databarang['sku'][$key]."'>";
												echo "<input type='hidden' name='size[]' value='".$databarang['size'][$key]."'>";
												echo "<input type='hidden' name='qty[]' value='".$databarang['qty'][$key]."'>";
												echo "<input type='hidden' name='harga[]' value='".$databarang['harga'][$key]."'>";
												$sub = $databarang['qty'][$key] * $databarang['harga'][$key];
												echo "<input type='hidden' name='subtotalbarang[]' value='".$sub."'>";


											}
										?>

										<input type="hidden" name="provinsi" class="form-control" value="<?php echo $provinsi;?>">
										<input type="hidden" name="kota" class="form-control" value="<?php echo $city;?>">
										<input type="hidden" name="kurir" class="form-control" value="<?php echo $datatransaksi['kurir'];?>">
										<input type="hidden" name="eQty" value="<?php echo $qty;?>">
										<input type="hidden" name="estimasi_hari" class="form-control" value="<?php echo $etd;?> Hari">
										<input type="hidden" name="ongkir" value="<?php echo $cost;?>">
										<input type="hidden" name="alamatujuan" value="<?php echo $datatransaksi['alamattujuan'];?>">

										<input type="hidden" name="catatan" value="<?php echo $datatransaksi['catatan'];?>">
										<input type="hidden" name="subtotal" value="<?php echo $subtotal;?>">
									   <label><input type="radio" name="methodpay" value="Rek BCA" checked>Direct Bank Tranfer</label>
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p><input type="submit" value="Place an order" class="btn btn-primary"></p>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>