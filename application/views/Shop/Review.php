<?php
	if(!empty($data)){

		$id_user = empty($id_user) ? 0 : $id_user;
		?>
		<div class="row">
			<div class="col-md-12">
				<h3><?php echo $data['count'];?> Review </h3>
				<div class="review">
					
						<textarea name="komen" id="komen" placeholder="Tulisakan sesuatu..." class="form-control" rows="5px;"></textarea>
						<p style="text-align: right;"><!-- <input type="submit" value="Kirim" class="btn btn-primary" id="input"> --><button class="btn btn-primary" id="input-komen">Kirim</button></p>
				</div>
					<?php
						foreach ($data['query'] as $key_query => $value_query) {
							?>
						<div class="review">
							<div class="user-img" style="background-image: url('<?php echo base_url('assets/gambar/Blank-profile.png');?>')"></div>
							<div class="desc">
								<h4>
									<?php
										$explode = explode('-', $value_query->tgl);
										$explode_tgl = explode(' ', $explode[2]);
										$tahun = $explode[0];
										$bulan = $explode[1];
										$tanggal = $explode_tgl[0];

										if($bulan == 1){

											$bulan = 'Januari';

										}elseif ($bulan == 2) {
											
											$bulan = 'Februari';

										}elseif ($bulan == 3) {
											
											$bulan = 'Maret';
										}elseif ($bulan == 4) {
											
											$bulan = 'April';
										}elseif ($bulan == 5) {
											
											$bulan = 'Mei';
										}elseif ($bulan == 6) {
											
											$bulan = 'Juni';
										}elseif ($bulan == 7) {
											
											$bulan = 'Juli';
										}elseif ($bulan == 8) {
											
											$bulan = 'Agustus';
										}elseif ($bulan == 9) {
											
											$bulan = 'September';
										}elseif ($bulan == 10) {
											
											$bulan = 'Oktober';
										}elseif ($bulan == 11) {
											
											$bulan = 'November';
										}else{
											
											$bulan = 'Desember';
										}

										//var_dump($explode_tgl);
									?>
									<span class="text-left"><?php echo $value_query->nama;?></span>
									<span class="text-right"><?php echo $tanggal.' '.$bulan.' '.$tahun;?></span>
								</h4>
								<p><?php echo $value_query->komen;?></p>
							</div>
						</div>
							<?php
						}
					?>
				
			</div>
		</div>
		<?php
	}else{
		?>
		<div class="row">
			<div class="col-md-12">
				<h3>0 Review</h3>
				<div class="review">

						<textarea name="komen" id="komen" placeholder="Tulisakan sesuatu..." class="form-control" rows="5px;" data-user="<?php echo $id_user;?>"></textarea>
						<p style="text-align: right;"><!-- <input type="submit" value="Kirim" class="btn btn-primary" id="input"> --><button class="btn btn-primary" id="input">Kirim</button></p>
				</div>
			</div>
		</div>
		<?php
	}
?>

<script>
		$(document).ready(function() {
			
			$('#input-komen').click(function() {
				var komen = $("#komen").val();
				var user = <?php echo $id_user;?>;
				var barang = <?php echo $id_barang;?>;

				if(user != 0){

					$.ajax({
						url: '<?php echo site_url('Review/add');?>',
						type: 'POST',
						data: {komen : komen, user : user, barang : barang},
						success : function(data){
		                    $('#review').html(data);
		                }
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function() {
						console.log("complete");
					});
					

				}else{
					alert('Silahkan Login untuk melakukan review');
				}

			});

		});
</script>