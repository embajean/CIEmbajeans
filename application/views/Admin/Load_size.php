<div class="col-md-4" id="div_ukuran">
		<label>Ukuran <a href="#javascript(0);" id="appn-btn"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="#javascript(0);" id="remove-apn"><i class="fa fa-minus-circle"></i></a></label>
		<select name="size[]" required class="form-control">
		<?php
			foreach ($size['size'] as $key_size => $value_size) {

				echo "<option value='$value_size'>$value_size</option>";
			}
		?>
		</select>
		<label>Stok</label>
		<input type='number' required max='100' class='form-control' min='0' name='stok[]'>
	
</div>

<script>
	var _showApend = "<?php echo "<div class='col-md-4 remove-apn-size'><label>Ukuran</label>";
	echo "<select required name='size[]' class='form-control'>";
		foreach($size['size'] as $key_size => $value_size){
			echo "<option value='$value_size'>$value_size</option>";
		}
	echo '</select>'; 
	echo "<label>Stok</label>";
	echo "<input type='number' required max='100' class='form-control' min='0' name='stok[]'>";?></div>";


	var _nApend = 1;

	$(document).ready(function() {
		$("#appn-btn").click(function(){
			_nApend++;

		if(<?php echo "'".$size['status']."'";?> == 'celana'){

			if(_nApend <= 10){

				$("#size").append(_showApend);
				console.log(_nApend);


			}else{
				alert('Max 10 Ukuran');
				//console.log('Error');

			}

		}else{

			if(_nApend <= 3){

				$("#size").append(_showApend);
				console.log(_nApend);


			}else{
				alert('Max 3 Ukuran');
				//console.log('Error');

			}

		}
			
 
	    });

	    $("#remove-apn").click(function(event) {
	    	$(".remove-apn-size").remove();
	    });
	});
</script>