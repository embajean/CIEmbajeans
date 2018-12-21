<?php
	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

	$cos = $data['rajaongkir']['results']['0']['costs'];
	$service = $data['rajaongkir']['results']['0']['costs'];

	/*echo "<label>".$service['service']."(".$service['description'].")</label>";*/
	if($data == 'gagal'){
		echo "<input type='text' value='' class='form-control'>";

	}else{

		echo "<select name='cost' onclick='totalcostbarang();' class='form-control' id='id-cost'>";

		foreach ($data['rajaongkir']['results']['0']['costs'] as $key => $value) {
			
			echo "<option value='".$value['service'].",".$value['cost']['0']['value'].",".$value['cost']['0']['etd']."'> Rp. ".$value['cost']['0']['value']." - Estimasi sampai ".$value['cost']['0']['etd']." Hari </option>";
		}

		echo "</select>
		</form>";
		?>

		<script>

			function totalcostbarang(){

				var cost = document.getElementById('id-cost').value;
				var total = document.getElementById('sub-totalsemua').value;
				var mysplit = cost.split(",");
				var mycost = mysplit[1];

				var totalsemua = parseInt(mycost) + parseInt(total);

				/*console.log(total);
				console.log(mycost);
				console.log(totalsemua);*/

				document.getElementById("totalsemua").innerHTML = "Rp." + totalsemua.toLocaleString();
				//document.getElementById("div_subtotal").innerHTML = "Rp." + totalsemua.toLocaleString();

				//document.getElementById("sub-totalsemua").value = totalsemua;
				document.getElementById("val_subtotal").value = totalsemua;
				document.getElementById("pembayaran").innerHTML = "<input type='submit' class='btn btn-warning' value='Pembayaran'>";
				document.getElementById("pembayaran").innerHTML = "<button type='submit' class='btn btn-warning'>Pembayaran</button>";


			}

		</script>
		<?php
		
	}
?>