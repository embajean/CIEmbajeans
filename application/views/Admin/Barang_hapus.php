<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
    
     <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

<!--modal-->
<div class="modal fade" id="modalbarang" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="largeModalLabel">Tambah Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo site_url('Barang/tambah_barang');?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
							<img src="#" id="uploadPreviewDepan" class="form-control img-responsive" style="width: 150px; height: 150px;">
							<label>Gambar Depan</label>
							<input id="uploadImageDepan" type="file" required="" name="gambar_depan" onchange="PreviewImageDepan();">

							<img src="#" id="uploadPreviewBelakang" class="form-control img-responsive" style="width: 150px; height: 150px;">
							<label>Gambar Belakang</label>
							<input id="uploadImageBelakang" type="file" required="" name="gambar_belakang" onchange="PreviewImageBelakang();">

							<img src="#" id="uploadPreviewSamping" class="form-control img-responsive" style="width: 150px; height: 150px;">
							<label>Gambar Samping</label>
							<input id="uploadImageSamping" type="file" required="" name="gambar_samping" onchange="PreviewImageSamping();">
					</div>
					<div class="col-md-6">
						<label>SKU</label>
						<input type="text" name="sku" class="form-control" placeholder="SKU003" required="">
						<label>Nama Barang</label>
						<input type="text" name="barangnama" class="form-control" value="" required="">
						<label>Kategori</label>
						<select name="id_kategori" class="form-control" required="">
							<?php
							echo "<option> --Silahkan Pilih--</option>";
								foreach ($kategori as $key => $value) {
									echo "<option value='$value->id'>$value->kategorinama</option>";
								}
							?>
						</select>
						<label>Stok</label>
						<input type="number" name="stok" class="form-control" value="0" required="">
						<label>Harga</label>
						<input type="number" name="harga" class="form-control" value="0" required="">
						<label>Ukuran</label>
						<input type="text" name="size" class="form-control" value="S,M,L,XL" required="">
						<label>Deskripsi</label>
						<textarea name="deskripsi" class="form-control" required=""></textarea>
						<input type="submit" class="btn btn-success" value="Tambah gambar">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- end modal-->

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="overview-wrap">
						<h2 class="title-1"></h2>
						<button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#modalbarang">
							<i class="zmdi zmdi-plus"> Tambah Barang</i>
						</button>
					</div>
				</div>
				<div class="col-md-12 col-md-12 col-xs-12">
					<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
					<!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Barang Shop</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>description</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th>price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>Lori Lynch</td>
                                                <td>
                                                    <span class="block-email">lori@example.com</span>
                                                </td>
                                                <td class="desc">Samsung S8 Black</td>
                                                <td>2018-09-27 02:12</td>
                                                <td>
                                                    <span class="status--process">Processed</span>
                                                </td>
                                                <td>$679.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>Lori Lynch</td>
                                                <td>
                                                    <span class="block-email">john@example.com</span>
                                                </td>
                                                <td class="desc">iPhone X 64Gb Grey</td>
                                                <td>2018-09-29 05:57</td>
                                                <td>
                                                    <span class="status--process">Processed</span>
                                                </td>
                                                <td>$999.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>Lori Lynch</td>
                                                <td>
                                                    <span class="block-email">lyn@example.com</span>
                                                </td>
                                                <td class="desc">iPhone X 256Gb Black</td>
                                                <td>2018-09-25 19:03</td>
                                                <td>
                                                    <span class="status--denied">Denied</span>
                                                </td>
                                                <td>$1199.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>Lori Lynch</td>
                                                <td>
                                                    <span class="block-email">doe@example.com</span>
                                                </td>
                                                <td class="desc">Camera C430W 4k</td>
                                                <td>2018-09-24 19:10</td>
                                                <td>
                                                    <span class="status--process">Processed</span>
                                                </td>
                                                <td>$699.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->


					<!-- <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>SKU</th>
                                                <th>Nama Barang</th>
                                                <th class="text-right">Kategori</th>
                                                <th>Size</th>
                                                <th class="text-right">Stok</th>
                                                <th>Harga</th>
                                                <th class="text-right">Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($barang as $key_barang => $value_barang) {
                                            	$no = $key_barang + 1;
                                            	echo "<tr>";
                                            	echo "<td>$no</td>
                                            		  <td><img src='".base_url('uploads/'.$value_barang->gambar_depan)."'></td>
                                            		  <td>$value_barang->barangnama</td>
                                            		  <td>$value_barang->kategorinama</td>
                                            		  <td>$value_barang->size</td>
                                            		  <td>$value_barang->stok</td>
                                            		  <td>$value_barang->harga</td>
                                            		  <td><textarea readonly>$value_barang->deskripsi</textarea></td>
                                            		  ";
                                            	echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function PreviewImageDepan() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImageDepan").files[0]);
		oFReader.onload = function (oFREvent)
	 	{
	    document.getElementById("uploadPreviewDepan").src = oFREvent.target.result;
		};
	 };

	 function PreviewImageBelakang() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImageBelakang").files[0]);
		oFReader.onload = function (oFREvent)
	 	{
	    document.getElementById("uploadPreviewBelakang").src = oFREvent.target.result;
		};
	 };

	 function PreviewImageSamping() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImageSamping").files[0]);
		oFReader.onload = function (oFREvent)
	 	{
	    document.getElementById("uploadPreviewSamping").src = oFREvent.target.result;
		};
	 };

</script>