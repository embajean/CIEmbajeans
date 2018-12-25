<h4>Barang yang dipilih <?php echo "'$barang->barangnama'";?> </h4>

	<div class="col-md-12">
		<label for="email">Email</label>
	</div>
	<div class="col-md-12">
		<input type="email" required name="email" id="email" placeholder="Masukkan email" class="form-control">
	</div>
	<div class="col-md-12">
		<label for="password">Password</label>
	</div>
	<div class="col-md-12">
		<input type="password" name="password" placeholder="****" required pattern=".{8,}" title="min 8 character" class="form-control">
	</div>
	<div class="col-md-12">
		<input type="submit" class="btn btn-warning" value="Sign in">
		<a href="<?php echo site_url('Login/register2');?>" class="btn btn-warning" target="_blank">Daftar Baru</a>
		<a href="<?php echo site_url('Login/cartguest');?>" class="btn btn-primary">As Guest</a>
	</div>