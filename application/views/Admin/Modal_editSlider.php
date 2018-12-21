<form action="<?php echo site_url('Slider/update/'.$data->id);?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<img src="<?php echo base_url('slider/'.$data->gambar);?>" id="uploadPreviewEdit">
			<input type="file" name="gambar" onchange="PreviewImageEdit(event)">
		</div>
		<div class="col-md-6">
			<label>Head - 1</label>
			<input type="text" name="head1" class="form-control" value="<?php echo $data->head1;?>">
			<label>Head - 2</label>
			<input type="text" name="head2" class="form-control" value="<?php echo $data->head2;?>">
			<label>Head - 3</label>
			<input type="text" name="head3" class="form-control" value="<?php echo $data->head3;?>">
			
			<input type="submit" class="btn btn-primary" value="Edit">
			<input type="reset" class="btn btn-warning" value="Reset">
		</div>
	</div>
</form>