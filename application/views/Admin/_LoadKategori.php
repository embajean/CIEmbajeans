<?php
    if(!empty($data)){
?>
<table class="table table-responsive">
	<thead>
		<th>No</th>
		<th>Kategori</th>
		<th>Berat</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
			foreach ($data as $key_data => $value_data) {
				$key_data++;
				echo "<tr>
						<td>$key_data</td>
						<td><input type='text' id='kategorinama-edit$key_data' value='$value_data->kategorinama' class='form-control'></td>
						<td><input type='text' id='berat-edit$key_data' value='$value_data->berat' class='form-control'></td>
						<td><a href='javascript:void(0);' title='ubah' id='edit$key_data'><i class='fa fa-pencil-square-o'></i></a>&nbsp;&nbsp;<a href='javascript:void(0);' id='hapus$key_data' title='hapus'><i class='fa fa-trash'></i></a></td>
					</tr>";
			}
		?>
	</tbody>
</table>
<?php
    }else{
        echo "Tidak ad Data, Silahkan inputkan data";
    }
?>
<script type="text/javascript">
	$(document).ready(function() {

		$("#btn-editkategori").click(function() {        	
        	<?php
			foreach ($data as $key_data => $value_data) {
				$key_data++;
			?>

					$('#kategorinama-edit<?php echo $key_data;?>').removeAttr('disabled');
		    		$('#berat-edit<?php echo $key_data;?>').removeAttr('disabled');
		    		$("#edit<?php echo $key_data;?>").show();
					
			<?php
				}
			?>
			
			$('#btn-resetkategori').show();

      	});

      	$('#btn-resetkategori').click(function() {
      		<?php
			foreach ($data as $key_data => $value_data) {
				$key_data++;
			?>

					$('#kategorinama-edit<?php echo $key_data;?>').attr('disabled','disabled');
		    		$('#berat-edit<?php echo $key_data;?>').attr('disabled', 'disabled');
		    		$("#edit<?php echo $key_data;?>").hide();
					
			<?php
				}
			?>
			$("#btn-resetkategori").hide();
      	});

		<?php
			foreach ($data as $key_data => $value_data) {
				$key_data++;
		?>
			//proses disabled
			$('#kategorinama-edit<?php echo $key_data;?>').attr('disabled', 'disabled');
	    	$('#berat-edit<?php echo $key_data;?>').attr('disabled', 'disabled');
	    	//hidden
	    	$("#edit<?php echo $key_data;?>").hide();

			$("#edit<?php echo $key_data;?>").click(function() {
				var id = '<?php echo $value_data->id;?>';
				var kategori = $("#kategorinama-edit<?php echo $key_data;?>").val();
				var berat = $("#berat-edit<?php echo $key_data;?>").val();

				$.ajax({
					url: '<?php echo site_url("Kategori/update/$value_data->id");?>',
					type: 'POST',
					data: {kategorinama : kategori, berat : berat},
					  success: function(data) {
                      
	                    $("#listKategori").html(data);
	                    $('#kategorinama-edit<?php echo $key_data;?>').attr('disabled', 'disabled');
		    			$('#berat-edit<?php echo $key_data;?>').attr('disabled', 'disabled');
		    			$("#btn-resetkategori").hide();
                      
                      alert('Berhasil Ubah Kategori');
                      	
                  	}
				})
				
			});

			$("#hapus<?php echo $key_data;?>").click(function() {
				var id = '<?php echo $value_data->id;?>';
				$.ajax({
					url: '<?php echo site_url("Kategori/delete/$value_data->id");?>',
					type: 'POST',
					data: {id: id},
					success : function(data){
						$("#listKategori").html(data);
					}
				})
				
			});
		<?php
			}
		?>
	});
</script>