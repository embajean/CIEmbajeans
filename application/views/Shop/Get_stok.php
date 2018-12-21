<?php
	if(empty($stok->stok)){
		echo "<div class='row row-pb-sm'><div class='col-md-6'>";
		echo "<input type='text' readonly value='Silahkan Pilih Ukuran !!' class='form-control'>";
		echo "</div></div>";
	}else{
	?>
	Sisa Stok <?php echo $stok->stok;?>
	<div class="row row-pb-sm">
		<div class="col-md-6">
			<div class="input-group">
				
				<input type="number" id="quantity" name="qty[]" class="form-control input-number" min="0" value="0" max="<?php echo $stok->stok;?>">
				
			</div>
		</div>
	</div>
	<?php
	}
?>