<form action="<?php echo site_url('Barang/edit_barang2/'.$barang->id);?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo site_url('Barang/tambah_gambar/'.$barang->id.'/'.$barang->SKU);?>" title="Gunakan untuk menambah gambar" id="tambah-edit-gambar"><i class="fa fa-plus-circle">Tambah Gambar</i></a>
                                </div>
                                <div class="row" id="_addPictEdit">
                                        <?php
                                            foreach ($gambar as $key_gambar => $value_gambar) {
                                                $key_gambar++;
                                                echo "<div class='col-md-4' id='delete_gambar".$key_gambar."'>";?>
                                                 <img src="<?php echo base_url('uploads/'.$value_gambar->gambar_product);?>" id="EdituploadPreview<?php echo $key_gambar;?>" class="form-control img-responsive" style="width: auto; height: auto;">
                                                <label style="margin: 0;">Gambar <?php echo $key_gambar;?> 
                                                    <span style="color:red">(max 200kb) &nbsp;
                                                        <input type="checkbox" title="Klik untuk ganti gambar" name="checkboxname[]" id="check<?php echo $key_gambar;?>">
                                                        <a href="#javascript(0);" title="Klik untuk hapus gambar" data-id="<?php echo $value_gambar->id;?>" id="hapus_gambar<?php echo $key_gambar;?>" style="color:red">
                                                            <i class="fa fa-minus-square-o"></i>
                                                        </a>
                                                    </span>
                                                </label>
                                                <br>
                                                <input type="file" name="gambar_product[<?php echo $key_gambar;?>]" class="form-control" id="input-gambar<?php echo $key_gambar;?>" onchange="EditPreviewImage<?php echo $key_gambar;?>(event);">
                                                <input type="hidden" name="id[<?php echo $key_gambar;?>]" value="<?php echo $value_gambar->id;?>">
                                               <!--  <input id="EdituploadImage" type="file" name="gambar[]" value="<?php echo $value_gambar->gambar_product;?>" onchange="EditPreviewImage<?php echo $key_gambar;?>(event);"> -->

                                        <?php   echo "</div>";
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>SKU</label>
                                    <input type="text" readonly name="sku" class="form-control" value="<?php echo $barang->SKU;?>" required="">
                                    <label>Nama Barang</label>
                                    <input type="text" readonly name="barangnama" class="form-control" value="<?php echo $barang->barangnama;?>" required="">
                                    <label>Kategori</label>
                                    <input type="text" disabled="" value="<?php echo $barang->kategorinama;?>" class="form-control">
                                    <input type="hidden" name="id_kategori" value="<?php echo $barang->id_kategori;?>">
                                   
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" value="<?php echo $barang->harga;?>" min="0"  required="">
                                    <?php
                                        echo "<div class='row'>";
                                        foreach ($size as $key_size => $value_size) {
                                            echo "<div class='col-md-4'>";
                                            echo "<label class='text-center'> Ukuran $value_size->ukuran | Stok</label>";
                                            echo "<input type='hidden' name='size[]' value='$value_size->ukuran'>";
                                            echo "<input type='number' name='stok[]' class='form-control text-center' value='$value_size->stok'>";
                                            echo "</div>";
                                        }
                                        echo "</div>";
                                    ?>
                                   
                                </div>
                                <div class="col-md-6">
                                    <label>Detail Ukuran</label>
                                    <textarea name="detailsize" class="form-control" cols="50" rows="7" required><?php echo $barang->detailsize;?></textarea>
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" required="" cols="50" rows="9"><?php echo $barang->deskripsi;?></textarea>
                                    <label>Petunjuk Pencucian</label>
                                    <textarea name="Petunjukcuci" class="form-control" cols="50" rows="7" required><?php echo $barang->Petunjukcuci;?></textarea>
                                    <input type="submit" class="btn btn-success" value="Edit Barang">
                                    <input type="reset" class="btn btn-warning" value="cancel">
                                </div>
                            </div>
                            </form>


<script type="text/javascript">

    //src gambar
	 var EditPreviewImage1 = function(event) {
        var output = document.getElementById('EdituploadPreview1');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var EditPreviewImage2 = function(event) {
        var output = document.getElementById('EdituploadPreview2');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var EditPreviewImage3 = function(event) {
        var output = document.getElementById('EdituploadPreview3');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var EditPreviewImage4 = function(event) {
        var output = document.getElementById('EdituploadPreview4');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var EditPreviewImage5 = function(event) {
        var output = document.getElementById('EdituploadPreview5');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var EditPreviewImage6 = function(event) {
        var output = document.getElementById('EdituploadPreview6');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

     

     //hapus gambar
      /*$('#hapus_gambar1').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                    });
                hapus = false;
                $('#delete_gambar1').remove();
            }

          }else{
                return false;
            }

      });

      $('#hapus_gambar2').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                    });
                hapus = false;
                $('#delete_gambar2').hide();
            }

          }else{
                return false;
            }

      });

      $('#hapus_gambar3').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                        $('#delete_gambar3').hide();
                    });
                hapus = false;
            }

          }else{
                return false;
            }

      });

      $('#hapus_gambar4').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                        $('#delete_gambar4').hide();
                    });
                hapus = false;
            }

          }else{
                return false;
            }

      });

      $('#hapus_gambar5').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                        $('#delete_gambar5').hide();
                    });
                hapus = false;
            }

          }else{
                return false;
            }

      });

      $('#hapus_gambar6').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                        $('#delete_gambar6').hide();
                    });
                hapus = false;
            }

          }else{
                return false;
            }

      });*/


      //reload input gambar
      $(function () {

       
        $('#input-gambar1').hide();

        //show it when the checkbox is clicked
        $('#check1').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#input-gambar1').fadeIn();
            } else {
                 $('#input-gambar1').hide();
            }
        });

        $('#input-gambar2').hide();

        //show it when the checkbox is clicked
        $('#check2').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#input-gambar2').fadeIn();
            } else {
                 $('#input-gambar2').hide();
            }
        });

        $('#input-gambar3').hide();

        //show it when the checkbox is clicked
        $('#check3').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#input-gambar3').fadeIn();
            } else {
                 $('#input-gambar3').hide();
            }
        });

        $('#input-gambar4').hide();

        //show it when the checkbox is clicked
        $('#check4').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#input-gambar4').fadeIn();
            } else {
                 $('#input-gambar4').hide();
            }
        });

        $('#input-gambar5').hide();

        //show it when the checkbox is clicked
        $('#check5').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#input-gambar5').fadeIn();
            } else {
                 $('#input-gambar5').hide();
            }
        });

        $('#input-gambar6').hide();

        //show it when the checkbox is clicked
        $('#check6').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#input-gambar6').fadeIn();
            } else {
                 $('#input-gambar6').hide();
            }
        });

    });


</script>