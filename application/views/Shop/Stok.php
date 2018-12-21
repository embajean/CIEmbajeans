<?php
	if(!empty($data)){

		if($data->stok > 0){

			if($agent == 'mob'){
				?>
				Banyak Barang
				<input type="number" name="qty[]" max="<?php echo $data->stok;?>" value="1" min="1" class="form-control text-center" onchange="jumlahbarang<?php echo $key;?>(), subtotalbarang()" id="jumlah_barang<?php echo $key;?>">
				<?php
			}else{
				?>
				<input type="number" name="qty[]" max="<?php echo $data->stok;?>" value="1" min="1" class="form-control text-center" onchange="jumlahbarang<?php echo $key;?>(), subtotalbarang()" id="jumlah_barang<?php echo $key;?>">
				<?php
			}
	?>


	<?php
		}else{
			echo "<input type='text' readonly value='Silahkan Pilih Ukuran !!' class='form-control'>";
		}

	if($data->stok <= 3){
		echo "<p style='color:red'>Stok sisa tinggal $data->stok</p>";
	}
?>
<?php
	}
?>