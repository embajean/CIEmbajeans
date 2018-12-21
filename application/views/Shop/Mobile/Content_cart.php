 <?php
 	$true = (isset($keranjang) == 'true') ? 1 : 0;
 	$date = date('Y-m-d');
 
	$tberat = 0;
	/*echo "<form action='#' method='post'>
	<input type='text' name='nama' value='123'>
	<input type='submit' class='btn btn-warning'>
	</form>";
	die;*/
?>
<!-- <div class="colorlib-shop"> -->
	<!-- <div class="container"> -->
		<!-- <div class="row row-pb-md"> -->
			<!-- <div class="col-md-12"> -->
				<!-- <div class="product-name"> -->
			<form action='<?php echo site_url('transaksi/')?>' method='post' enctype='multipart'>
		 	<input type='hidden' name='id_user' value='<?php echo $session['id'];?>'>
					<div class="table">
						<table class="table table-responsive" style="background-color: transparent;">
							<thead>
								<th>Product</th>
								<th>Ukuran | Harga</th>
								<th>Total</th>
								<th>Hapus</th>
							</thead>
							<tbody>
								<?php

									$query_result = $cart['result'];
		 							$diskon = 0;

									foreach ($query_result as $key => $value) {

									if(!empty($value->diskonpersen)){
											        
										$diskon = ($date <= $value->lim_diskon) ? (($value->diskonpersen / 100) * $value->harga) : 0;
										$afterdiskon = $value->harga - $diskon;

									}else{

									   $afterdiskon = ($date <= $value->lim_diskon) ? $value->diskonangka : $value->harga;

									}

									echo "<tr>";
									echo '<td><img src="'.base_url('uploads/'.$gambar[$key]->gambar_product).'" style="height: 100px; width: auto;"></td>';
									echo "<td>";

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

										echo "<select name='size[]' class='form-control' id='change-size$key' data-key='$key' data-sku='$value->sku' required>";
										echo "<option value='0'> Pilih Ukuran </option>";
										
										foreach ($size[$key] as $key_size => $value_size) {
										
											echo "<option value='$value_size->ukuran'>$value_size->ukuran</option>";

										}

											echo "</select>";
										echo '<p id="pilih-ukuran'.$key.'">Silahkan Pilih Ukuran</p>';
										echo '<input type="hidden" id="harga'.$key.'" value="'.$afterdiskon.'" name="harga[]">';
										echo '<input type="hidden" name="id_barang[]" value="'.$value->id_barang.'">';
										echo '<input type="hidden" name="sku[]" value="'.$value->sku.'">';
										echo '<input type="hidden" name="namabarang[]" value="'.$value->barangnama.'">';
										echo "</td>";
										echo '<td><input type="hidden" name="subtotalbarang[]" onchange="subtotalbarang'.$key.'()" id="div_total2'.$key.'" value="'.$afterdiskon.'">
											<div id="div_total'.$key.'">Rp. '.number_format($afterdiskon).'</div></td>';
										echo '<td><a href="javascript:void(0);" title="Hapus Cart" class="btn btn-danger" id="delete-cart'.$key.'" data-id="'.$value->id.'" data-mac="'.$mac.'" data-user="'.$session['id'].'">x</a></td>';
										/*echo "<td>aaa</td>";*/
										echo "</tr>";

										$tberat = $tberat + $value->berat;
										echo "<input type='hidden' name='berat' id='totalberat' value='$tberat'>";
							
									}
								?>
							</tbody>
						</table>
					</div>

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
									</form>
									<!-- <input type="submit" value="Pembayaran" class="btn btn-warning"> -->
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
