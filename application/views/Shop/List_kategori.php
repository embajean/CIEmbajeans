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
/*
									var_dump(count($gambar[11]));
									die;*/
								?>
								<div class="col-md-3 col-xs-6 text-center">
									<div class="product-entry">
										<a href="<?php echo site_url('Shop/single/'.$value_barang->id);?>">
											<?php
												if(!empty($gambar[$key_barang])){
											?>

												<div class="product-img" style="background-image: url(<?php echo base_url('uploads/'.$gambar[$key_barang][0]->gambar_product);?>);">
													<p class="tag"><span class="new">
														
														<?php
														//selisih tanggal
															$exp_tgl = explode(' ', $value_barang->tgl_buat);
															$tanggal_awal = new DateTime($exp_tgl[0]);
															$tanggal_selisih = new DateTime();
															$selisih = $tanggal_selisih->diff($tanggal_awal)->format("%a");

															if($selisih <= 30){
																echo "New";
															}
															
														?>

													</span></p>
													<?php
														if(!empty($gambar[$key_barang][1])){
													?>
														<div class="overlay">
															<div class="product-img" style="background-image: url(<?php echo base_url('uploads/'.$gambar[$key_barang][1]->gambar_product);?>)">
															</div>
														</div>
													<?php
														}else{

														}
													?>
													
													<div class="cart">
														<p>
															<?php
																if(!empty($session)){
															?>
																<span class="addtocart"><a href="#javascript(0);" class="add_cart" data-target='#modallogin' data-toggle='modal' data-produkid="<?php echo $value_barang->id;?>" data-mac="<?php echo $mac;?>" data-produkharga="<?php echo $value_barang->harga;?>" data-user="<?php echo $session['id'];?>" data-qty="1"><i class="icon-shopping-cart"></i></a></span> 

															<?php
																}else{
															?>
															<span class="addtocart"><a href="#javascript(0);" class="add_cart" data-target='#modallogin' data-toggle='modal' data-produkid="<?php echo $value_barang->id;?>" data-mac="<?php echo $mac;?>" data-produkharga="<?php echo $value_barang->harga;?>" data-user="<?php echo $session['id'];?>" data-qty="1"><i class="icon-shopping-cart"></i></a></span> 
															<?php
																}
															?>
															


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

											<?php
												}
											?>
										</a>
										<div class="desc">
											<!-- <h3><?php echo $value_barang->barangnama;?></h3> -->
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
							echo $pagination
								?>