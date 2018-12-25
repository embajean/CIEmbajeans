<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<!-- modal -->

	<?php
		$trans = $_myTrans['query'];

		foreach ($trans as $key_trans => $value_trans) {
		?>

			<div class="modal fade" id="modal-buktiupload<?php echo $key_trans;?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Bukti Transfer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        	<div class="row">
                        		<form action="<?php echo site_url('Ordering/upbukti/'.$value_trans->idtrans);?>" method="post" enctype="multipart/form-data">
		                        	<?php
		                        		if(empty($value_trans->bukti)){
		                        	?>
		                        		<img src="<?php echo base_url('assets/Gambar/Blank-profile.png');?>" id="uploadPreviewBukti<?php echo $key_trans;?>" class="img-responsive">
		                        	<?php
		                        		}else{
		                        	?>
		                        		<img src="<?php echo base_url('upload_bukti/'.$value_trans->bukti);?>" id="uploadPreviewBukti<?php echo $key_trans;?>" class="img img-responsive">
		                        	<?php
		                        		}
		                        	?>
		                        	<input type="file" name='gambar' class="form-control" onchange="PreviewImageUpbukti<?php echo $key_trans;?>(event)">
		                        	<input type="submit" class="btn btn-success" value="Upload Bukti">
		                        	<p style="color: red; font-size: 10px;">max 300kb, max height : 1024, max Width : 768</p>
		                        </form>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
	<?php
		}
	?>
	<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Detail Transaksi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="mod_get_detail_trans">
                        </div>
                    </div>
                </div>
            </div>

<!-- end modal-->


<div class="colorlib-shop" style="background-color: rgb(232, 230, 230); padding-top : 20px; padding-bottom: 0px;">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-push-2" id="shop-1">
						<div class="row row-pb-lg">
							<div class="row">
								<!-- <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> -->
								<form>
									<div class="col-md-3">
										<input type="text" class="form-control" style="border-radius : 30px; text-align: center" placeholder="Cari Transaksi">
									</div>
								</form>
									<div class="col-md-9"><div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div></div>
								<div class="col-md-12" id="belanjaku">
									<br>
									<?php
									$date = date('Y-m-d');
									if(empty($_myTrans['numrows'])){
									?>

										<h4 class="text-center">Belum Ada Transaksi <a href="<?php echo site_url('Shop');?>">Belanja Disini</a></h4>
										

									<?php
									}else{

										foreach ($_myTrans['query'] as $key_trans => $value_trans) {

											$exp_tglBeli = explode('-', $value_trans->tgl_beli);
											$exp_tglBeli2 = explode(' ', $exp_tglBeli[2]);
											$exp_waktu = explode(':', $exp_tglBeli2[1]);

											if($exp_tglBeli[1] == 1){
												
												$bulan = "Januari";

											}elseif ($exp_tglBeli[1] == 2) {
												
												$bulan = "Februari";

											}elseif ($exp_tglBeli[1] == 3) {
												
												$bulan = "Maret";

											}elseif ($exp_tglBeli[1] == 4) {
												
												$bulan = "April";

											}elseif ($exp_tglBeli[1] == 5) {
												
												$bulan = "Mei";

											}elseif ($exp_tglBeli[1] == 6) {
												
												$bulan = "Juni";

											}elseif ($exp_tglBeli[1] == 7) {
												
												$bulan = "Juli";

											}elseif ($exp_tglBeli[1] == 8) {
												
												$bulan = "Agustus";

											}elseif ($exp_tglBeli[1] == 9) {
												
												$bulan = "September";

											}elseif ($exp_tglBeli[1] == 10) {
												
												$bulan = "Oktober";

											}elseif ($exp_tglBeli[1] == 11) {
												
												$bulan = "November";

											}else{

												$bulan = "Desember";

											}

											?>
											<div class="panel panel-default">
												<div class="panel-body">
													<div class="col-md-9">
														<table class="table table-responsive">
															<thead>
																<th>No Tagihan</th>
																<th>Total Tagihan</th>
																<th>Status Tagihan</th>
															</thead>
															<tbody>
																<th>
																	<?php echo $value_trans->idtrans.'<br><p style="font-size: 11px;">'.$exp_tglBeli2[0].' '.$bulan.' '.$exp_tglBeli[0].' '.$exp_waktu[0].':'.$exp_waktu[1].' WIB</p>';?>
																</th>
																<th> Rp. <?php 
																	$totaltagihan = 0; 
																	$totaltagihan = $value_trans->total_harga + $value_trans->ongkir;
																	echo number_format($totaltagihan,2);
																?></th>
																<th>
																<?php
																	if($value_trans->status == 'nonpaid'){

																		echo "Belum Bayar<br><div id='timecount$key_trans'></div>";

																	}elseif ($value_trans->status == 'Diproses' || $value_trans->status == 'Dikirim') {

																		if(!empty($value_trans->noresi)){

																			echo "Sedang dikirim <br> Resi : <br>$value_trans->noresi";	

																		}else{

																			echo "Sedang dikirim";

																		}

																		

																	}elseif($value_trans->status == 'Diperiksa'){

																		echo "Sedang Diperiksa";

																	}else{
																		echo 'Dibatalkan (kadaluarsa)';
																	}
																?>
																</th>
															</tbody>
														</table>
													</div>
													<div class="col-md-3" style="padding-top : 20px;">
														<a href="javascript:void(0);" class="btn btn-default" data-target='#modal-detail' data-toggle='modal'data-id='<?php echo $value_trans->idtrans;?>'>Lihat Detail</a>
													</div>
													<div class="col-md-9">
														<table class="table table-responsive">
															<thead>
																<th>Barang Beli</th>
																<th>Jumlah Barang</th>
																<th>Status Pembelian</th>
																<!-- <th>Batas Bayar</th> -->
															</thead>
															<tbody>
																<th><img src="<?php echo base_url('uploads/'.$value_trans->gambar);?>" style="width: 100px;"></th>
																<th><?php echo $_myTrans['JumlahBarang'][$key_trans];?></th>
																<?php
																	if($value_trans->status == 'nonpaid'){

																		echo "<th>Belum Bayar</th>";

																	}elseif ($value_trans->status == 'Diproses' || $value_trans->status == 'Dikirim') {

																		echo "<th>Sedang dikirim</th>";

																	}elseif($value_trans->status == 'Diperiksa'){

																		echo "<th>Sedang Diperiksa</th>";

																	}else{

																		echo "<th>Dibatalkan (Kadaluarsa)</th>";
																	}
																?>
																<!-- <th><?php echo $value_trans->batasbayar;?></th> -->
															</tbody>
														</table>
													</div>
													<div class="col-md-3" style="padding-top: 20px;">
														<?php
														if($value_trans->batasbayar >= $sekarang->now ){

															echo "<a href='#javascript:void(0);' class='btn btn-default' data-toggle='modal' data-target='#modal-buktiupload$key_trans'> Bukti Pembayaran</a>";
															
														}else{
															echo '<a href="'.site_url('Shop/single/'.$value_trans->idbarang).'" class="btn btn-default"> Beli Lagi</a>';
														}
														?>
														
													</div>
												</div>
											</div>
									<?php
										}
									}
									?>
								</div>
								<?php
									if(empty($user)){

									}else{
								?>
										<div class="col-md-12" id="myprofile">
											<div class="panel panel-default">
												<form action="<?php echo site_url('User/update/'.$user->id);?>" method="post" enctype="multipart/form-data">
													<div class="panel-body">
														<div class="col-md-9">
															<label for="email">Email</label>
															<input type="email" class="form-control" name="email" id="frm-email" value="<?php echo $user->email;?>" style="border: 1px solid !important;">
															<label for="usernama_depan">Nama Depan</label>
															<input type="text" name="usernama_depan" class="form-control" id="frm-namadepan" value="<?php echo $user->usernama_depan;?>" style="border: 1px solid !important;">
															<label for="usernama_belakang">Nama Belakang</label>
															<input type="text" name="usernama_belakang" class="form-control" id='frm-namabelakang' value="<?php echo $user->usernama_belakang;?>" style="border: 1px solid !important;">
															<label for="telephon">Telephon</label>
															<input type="text" name="telephon" class="form-control" id='frm-no' value="<?php echo $user->telephon;?>" style="border: 1px solid !important;">
															<label for="tgl_lahir">Tanggal Lahir</label>
															<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $user->tgl_lahir;?>" id='frm-date' style="border: 1px solid !important;" max="<?php echo $date;?>">
															<label for="jk">Jenis Kelamin</label><br>
															<?php
															if(empty($user->jk)){
																
																echo "<input id='frm-jk' type='radio' name='jk' value='Laki - laki' required> Laki - laki &nbsp;&nbsp;";
																echo "<input type='radio' id='frm-jk' name='jk' value='Perempuan' required> Perempuan";

															}else{

																if($user->jk == 'Perempuan'){

																	echo "<input type='radio' name='jk' id='frm-jk' value='Laki - laki' > Laki - laki &nbsp;&nbsp;";
																	echo "<input type='radio' name='jk' id='frm-jk' value='Perempuan' checked> Perempuan";

																}else{

																	echo "<input type='radio' name='jk' id='frm-jk' value='Laki - laki' checked> Laki - laki&nbsp;&nbsp;";
																	echo "<input type='radio' name='jk' id='frm-jk' value='Perempuan' > Perempuan";

																}
															}
															?>

														</div>
														<div class="col-md-3">
															<div class="thumbnail">
																<?php

																if(!empty($user->images)){

																	echo "<img src='".base_url('user_up/'.$user->images)."' id='uploadPreview'>";
																	echo '<div class="caption" style="margin-top: -20px;text-align: center;">
																			<input type="file" name="images" id="frm-img" class="form-control" onchange="PreviewImage(event)">
																		</div>';

																}else{

																	echo '<img src="'.base_url('assets/Gambar/Blank-profile.png').'" alt="" class="img img-responsive" id="uploadPreview">';
																	echo '<div class="caption" style="margin-top: -20px;text-align: center;">
																			<input type="file" name="images" id="frm-img" class="form-control" onchange="PreviewImage(event)">
																		</div>';
																}
																?>
																
															</div>
															<input type="submit" value="Edit Data" class="btn btn-primary" id="btn-user">
														</div>											
													</div>
												<form>
											</div>
										</div>
								<?php
									}
								?>

							</div>
						</div>



						<div class="row">
							<div class="col-md-12">
								<?php echo $this->pagination->create_links();?>
							</div>
						</div>
					</div>
					<?php
						if(empty($user)){

						}else{
					?>
						<!-- background kanan -->
						<form>
						<div class="col-md-2 col-md-pull-10" style="margin-top: 50px;overflow-x: hidden; background-color: white;">
							<div class="sidebar" style="display : block; padding-top: 20px;">
								<div class="thumbnail">
									<?php
										if(!empty($user->images)){

											echo "<img src='".base_url('user_up/'.$user->images)."'>";

										}else{
											echo '<img src="'.base_url('assets/Gambar/Blank-profile.png').'" alt="" class="thumbnail">';
										}
									?>
									<div class="caption" style="margin-top: -20px;text-align: center;">
										<?php echo $user->usernama_depan;?>
									</div>
								</div>
								<div class="col-md-12">
									<p><a href="#javascript:void(0);" style="color:black;" id="btn-akun"><span class="icon-user3"></span> Akun Saya</a></p>
									<p><a href="#javascript:void(0);" style="color:black;" id="btn-belanja"><span class="icon-cart2"></span> Belanjaku</a></p>
								</div>
							</div>
						</div>
						</form>
					<?php
						}
					?>
				</div>
			</div>
		</div>

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

		<script>
			<?php
				foreach ($trans as $key_trans => $value_trans) {
			?>
			var PreviewImageUpbukti<?php echo $key_trans;?> = function(event) {
		        var output = document.getElementById('uploadPreviewBukti<?php echo $key_trans;?>');
		        output.src = URL.createObjectURL(event.target.files[0]);
		      };
			<?php
				}

				foreach ($_myTrans['query'] as $key_trans => $value_trans) {
			?>

				//get time
				var besok<?php echo $key_trans;?> = new Date("<?php echo $value_trans->batasbayar;?>").getTime();
				/*var besok = new Date('2018-12-01 15:33:32').getTime();*/

				var x<?php echo $key_trans;?> = setInterval(function() {

				  // Get todays date and time
				  var now<?php echo $key_trans;?> = new Date().getTime();

				  // Find the distance between now and the count down date
				  var distance<?php echo $key_trans;?> = besok<?php echo $key_trans;?> - now<?php echo $key_trans;?>;
				  //var distance2 = tomorrow2 - now;


				  // Time calculations for days, hours, minutes and seconds
				  var days<?php echo $key_trans;?> = Math.floor(distance<?php echo $key_trans;?> / (1000 * 60 * 60 * 24));
				  var hours<?php echo $key_trans;?> = Math.floor((distance<?php echo $key_trans;?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				  var minutes<?php echo $key_trans;?> = Math.floor((distance<?php echo $key_trans;?> % (1000 * 60 * 60)) / (1000 * 60));
				  var seconds<?php echo $key_trans;?> = Math.floor((distance<?php echo $key_trans;?> % (1000 * 60)) / 1000);

				  // Display the result in the element with id="demo"
				  /*if(besok != 0){

				  	document.getElementById("timecount<?php echo $key_trans;?>").innerHTML = hours + "Jam "
				  + minutes + "menit " + seconds + "s ";	*/

					  if(distance<?php echo $key_trans;?> < 0){
					  	clearInterval(x<?php echo $key_trans;?>);
					    document.getElementById("timecount<?php echo $key_trans;?>").innerHTML = "(EXPIRED)";	
					  }else{
					  	  document.getElementById("timecount<?php echo $key_trans;?>").innerHTML = hours<?php echo $key_trans;?> + "Jam "
				  + minutes<?php echo $key_trans;?> + "menit " + seconds<?php echo $key_trans;?> + "s ";
					  }


				  //} 

				}, 1000);
			<?php
				}
			?>

		</script>