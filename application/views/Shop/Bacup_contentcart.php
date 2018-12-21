 <?php
 	$true = (isset($keranjang) == 'true') ? 1 : 0;
 	$date = date('Y-m-d');
 
 							$tberat = 0;
 							echo "<form action='".site_url('transaksi/')."' method='post' enctype='multipart'>";
 							echo "<input type='hidden' name='id_user' value='".$session['id']."'>";
 							echo "<div class='table'>";
 							echo '<table class="table table-responsive" style="background: transparent !important;">';
 							echo "<thead>
 									<th>My Cart<span id='cart-jumlah'></span></th>
 									<th></th>
 									<th>Harga | Ukuran</th>
 									<th>Jumlah</th>
 									<th>Total</th>
 								 </thead>
 								 <tbody>";
 							$query_result = $cart['result'];
 							$diskon = 0;
							foreach ($query_result as $key => $value) {
							    if(!empty($value->diskonpersen)){
							        
							        $diskon = ($date <= $value->lim_diskon) ? (($value->diskonpersen / 100) * $value->harga) : 0;
							        $afterdiskon = $value->harga - $diskon;

							    }else{

							        $afterdiskon = ($date <= $value->lim_diskon) ? $value->diskonangka : $value->harga;

							    }
								
								?>
								<tr>
									<td><img src="<?php echo base_url('uploads/'.$gambar[$key]->gambar_product);?>" class="img img-responsive" style="height : 200px;"></td>
									<td>
										<?php
											$explode = explode(PHP_EOL, $value->deskripsi);
											foreach ($explode as $key_exp => $value_exp) {
												echo "$value_exp".'<br>';
											}
										?>
										<p><a href="#javascript(0);" title="Hapus Cart" id="delete-cart<?php echo $key;?>" data-id="<?php echo $value->id;?>" data-mac="<?php echo $mac;?>" data-user="<?php echo $session['id'];?>"><i class="icon-delete"></i></a></p>
									</td>
									<td>
										<?php
											if($date <= $value->lim_diskon){

												
												
												if(!empty($value->diskonpersen)){

													echo '<p class="price"><span style="text-decoration: line-through">Rp'.number_format($value->harga,2).'</span>';    
												    echo '<br><span> Rp'.number_format($afterdiskon,2).'</span><br>Diskon : '.$value->diskonpersen.'% </p>';
												    
												}else{

												    echo '<br><span style="text-decoration: line-through"> Rp'.number_format($value->harga,2).'</span><br>Diskon : Rp. '.number_format($value->diskonangka,2).' </p>';
												}
												
												

											}else{

												echo "<p><span class='price'>Rp.".number_format($value->harga)."</span></p>";
											}
											/*echo '<div class="size-wrap" id="size">';
											echo '<p class="size-desc">';
											foreach ($size[$key] as $key_size => $value_size) {
												echo '<a href="#" class="size size-1 warning" style="border: groove" data-sku ="'.$value->sku.'" data>'.$value_size->ukuran.'</a>';
											}*/

											echo "<select name='size[]' class='form-control text-center' id='change-size$key' data-key='$key' data-sku='$value->sku' required>";
											echo "<option value='0'> Pilih Ukuran </option>";
											foreach ($size[$key] as $key_size => $value_size) {
												echo "<option value='$value_size->ukuran'>$value_size->ukuran</option>";
											}
											echo "</select>";

										?>
											</p>
											<input type="hidden" id="harga<?php echo $key;?>" value="<?php echo $afterdiskon;?>" name="harga[]">
											<input type="hidden" name="id_barang[]" value="<?php echo $value->id_barang;?>">
											<input type="hidden" name="sku[]" value="<?php echo $value->sku;?>">
											<input type="hidden" name="namabarang[]" value="<?php echo $value->barangnama;?>">
									</td>
									<td><p id="pilih-ukuran<?php echo $key;?>">Silahkan Pilih Ukuran</p></td>
									<td>
										<input type="hidden" name="subtotalbarang[]" onchange="subtotalbarang<?php echo $key;?>()" id="div_total2<?php echo $key;?>" value="<?php echo $afterdiskon;?>">
										<div id="div_total<?php echo $key;?>"><?php echo "Rp. ".number_format($afterdiskon);?></div>
									</td>
								</tr>
								<?php
								
								$tberat = $tberat + $value->berat;
								echo "<input type='hidden' name='berat' id='totalberat' value='$tberat'>";
								
							}
echo '</tbody><table></div>';
?>


						<div class="row">
							<div class="col-lg-6 col-md-6">
								<br>
								<label><a href="#javascript(0);" id="tampil_promo" style="color:grey">Kode Promo</a></label><br>
								<input type="text" name="kodepromo" class="form-control" id="promo">
								<br>
								<label style="color:grey;">catatan</label>
								<textarea class="form-control" cols="10" rows="2" name="catatan" required></textarea>
								<label style="color:grey;">Alamat Tujuan</label>
								<textarea class="form-control" cols="10" rows="2" name="alamattujuan" required></textarea>
								<input type="hidden" name="jumlahbarang_beli" value="<?php echo $cart['jumlah'];?>">
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="row" id="subtotal">
									<br>
									<div class="col-md-6 col-lg-6">
										<h4 style="color:grey;">Subtotal</h4>
									</div>
									<div class="col-md-6 col-lg-6">
										<?php
											$subtotal = 0;
											$afterdiskon = 0;
											foreach ($cart['result'] as $key => $value) {
											    
											    if(!empty($value->diskonpersen)){
											        
											        $diskon = ($date <= $value->lim_diskon) ? (($value->diskonpersen / 100) * $value->harga) : 0;
												    $afterdiskon = $value->harga - $diskon;

												    
												    
											    }elseif(!empty($value->diskonangka)){
											        
											        $diskon = ($date <= $value->lim_diskon) ? $value->diskonangka : $value->harga;
												    $afterdiskon = $diskon;

												    
												    
											    }else{
											    	
											    	$afterdiskon = $value->harga;
											    	

											    }

											    $subtotal += $afterdiskon;

											}
											/*var_dump(array($subtotal, $cek));
											die;*/
										?>
										<p id="div_subtotal"><?php echo "Rp.".number_format($subtotal);?></p>
										<input type="hidden" name="subtotalall" onchange="functotalsemua();" id="val_subtotal">
									</div>
									<div class="col-md-12 col-lg-12" id="data-provinsi">
										<h3>Pilih Pengiriman</h3>
										<label style="color:grey;">Provinsi</label><br>
										
											<?php

											if($provinsi == 'gagal'){
												echo '<select name="province_id" id="province_id" class="form-control" disabled>';
												echo "<option>Server Sedang Sibuk, Coba beberapa saat lagi</option>
												</select>";
											}else{
												echo '<select name="province_id" id="province_id" class="form-control">';
												foreach ($provinsi['rajaongkir']['results'] as $key => $value) {
													echo "<option value='".$value['province_id'].",".$value['province']."'> ".$value['province']."</option>";
												}
												echo '</select>';
											}
											?>

										<div id="asalkota"></div>
																		
									</div>
								</div>

								<div class="row" id="total">
									<div class="col-lg-6 col-md-6">
										<h3>Total</h3>
									</div>
									<div class="col-lg-6 col-md-6">
										<!-- <h3>Rp. 10000.000,-</h3> -->
										<h3><p id="totalsemua"><?php echo "Rp. ".number_format($subtotal);?></p></h3>
										<input type="hidden" name="totalbayar" id="sub-totalsemua" value="<?php echo $subtotal;?>">
									</div>
									<div id="pembayaran"></div>
								</div>

							</div>
						</div>
					

<script type="text/javascript">

	//$("#data-provinsi").hide();



	$(document).ready(function() {
		$('#cart-jumlah').load("<?php echo site_url('cart/count_cart');?>");
	});

	$("#promo").toggle();
	$('#tampil_promo').on('click', function(e){
		
		$("#promo").fadeToggle('slow');

	});

	$(document).ready(function() {

		$('#province_id').click(function() {
			var province_id = $('#province_id').val();
			$.ajax({
				url: '<?php echo site_url('Cart/get_kota');?>',
				type: 'POST',
				data: {province_id: province_id},
				success: function(data){
					$("#asalkota").html(data);
				}
			})
			.done(function() {
				console.log("success");
				console.log('pron');
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
		var cekStok = 0;
		<?php
			foreach ($cart['result'] as $key => $value) {
				?>				
				var _StokTrue<?php echo $key;?> = '';
				$('#delete-cart<?php echo $key;?>').click(function() {
					var mac = $(this).data('mac');
					var user = $(this).data('user');
					var id = $(this).data('id');
					var _postCart = '<?php echo $true?>';
					$.ajax({
						url: '<?php echo site_url('Cart/hapus_cart/');?>',
						type: 'POST',
						data: {mac: mac, user : user, id : id},

					})
					.done(function() {
						$('#cart-mycart').load("<?php echo site_url('cart/load_content');?>");
						$('#cart-jumlah').load("<?php echo site_url('cart/count_cart');?>");
						if(_postCart == 1){
							$('#cartnavbar').load("<?php echo site_url('cart/navbarcart');?>");
						}
					})
					.fail(function() {
						console.log("error");
					})
					.always(function() {
						console.log("complete");
					});
					
				});

				$("#change-size<?php echo $key;?>").change(function(event) {
					var size = $('#change-size<?php echo $key;?>').val();
					var sku = $(this).data('sku');
					var key = $(this).data('key');
					//console.log(size, sku);
					$.ajax({
						url: '<?php echo site_url('cart/stok_size');?>',
						type: 'POST',
						data: {ukuran: size, sku : sku, key : key},
						success: function(data){
							$("#pilih-ukuran<?php echo $key;?>").html(data);
							//console.log(size, sku);
							/*_StokTrue<?php echo $key;?> = $('#change-size<?php echo $key;?>').val();
							_StokTrue<?php echo $key;?> = _StokTrue<?php echo $key;?> != 0 ? 1 : 0;

							var jumlahbarang = <?php echo count($cart['result']);?>;

							console.log("Key ke <?php echo $key;?> Nilai =>"+_StokTrue<?php echo $key;?>, 'Jumlah Barang ' + jumlahbarang);*/
						}
					})
					
				});
				
				<?php
			}
		?>
		


	});

	<?php foreach ($cart['result'] as $key => $value): ?>
		
		function jumlahbarang<?php echo $key?>(){

			var x = document.getElementById('jumlah_barang<?php echo $key;?>').value;
			var y = document.getElementById('harga<?php echo $key;?>').value;
			var total = parseInt(x) * parseInt(y);
			//document.getElementById("div_total<?php echo $key;?>").value = total;
			document.getElementById("div_total<?php echo $key;?>").innerHTML = "Rp. " + total.toLocaleString();
			document.getElementById("div_total2<?php echo $key;?>").value = total;
		}

	<?php endforeach ?>

	function subtotalbarang() {
		var total = 0;
		/*var barang3 = document.getElementById('div_total23').value;*/
		
		<?php
			foreach ($cart['result'] as $key_c => $value_c) {
				?>
					var barang<?php echo $key_c;?> = document.getElementById('div_total2<?php echo $key_c;?>').value;
					total = parseInt(total) + parseInt(barang<?php echo $key_c;?>);
				<?php
			}
		?>
		document.getElementById("div_subtotal").innerHTML = "Rp." + total.toLocaleString();
		document.getElementById("val_subtotal").value = total;
		document.getElementById("totalsemua").innerHTML = "Rp." + total.toLocaleString();
		document.getElementById('sub-totalsemua').value = total;
	}


</script>
