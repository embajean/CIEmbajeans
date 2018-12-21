<div class="row">
	<div class="col-md-12">
		<div class="table">
			<table class="table table-responsive">
				<thead>
					<th>Gambar</th>
					<th>Nama Barang</th>
					<th>Qty</th>
					<th>Harga</th>
					<th>Ukuran</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					<?php
					$gambar = $query['gambar'];
					$total = 0;
					$totalall = 0;
						foreach ($query['query'] as $key_query => $value_query) {

						$total = $total + ($value_query->harga * $value_query->qty );

						echo "<tr>";
						echo "<td><img src='".base_url('uploads/'.$gambar[$value_query->sku])."' style='height:200px; width: auto;'></td>";
						echo "<td>$value_query->barangnama</td>";
						echo "<td>$value_query->qty</td>";
						echo "<td>Rp.".number_format($value_query->harga,2)."</td>";
						echo "<td>$value_query->ukuran</td>";
						echo "<td>Rp.".number_format($value_query->subtotal,2)."</td>";
						echo "</tr>";
						}

					$totalall = $total + $value_query->ongkir;

					?>
					<tr>
						<td colspan="5" class="text-right">Total</td>
						<td ><?php echo "Rp ".number_format($total,2);?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right">Kurir</td>
						<td colspan="3"><?php echo $value_query->kurir;?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right">Provinsi</td>
						<td colspan="3"><?php echo $value_query->provinsi;?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right">Kota</td>
						<td colspan="3"><?php echo $value_query->city;?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right">Alamat</td>
						<td colspan="3"><?php echo $value_query->alamat;?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right">Estimasi</td>
						<td colspan="3"><?php echo $value_query->estimasi;?></td>
					</tr>
					<tr>
						<td colspan="5" class="text-right">Ongkir</td>
						<td ><?php echo "Rp ".number_format($value_query->ongkir,2);?></td>
					</tr>
					<tr>
						<td colspan="5" class="text-right">Kurir</td>
						<td><?php echo "Rp ".number_format($totalall,2);?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>