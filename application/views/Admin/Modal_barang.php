<?php
    $sekarang = date('Y-m-d');
?>
<form action="<?php echo site_url('Barang/edit_barang2/'.$barang->id);?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="javascript:void(0)" class="btn btn-primary" title="Tambah Gambar" id="appn_pictureModal">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger" title="Kurangi Gambar" id="uploadPreviewModal" id="uploadPreviewModal">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </div>
                                <div class="row" id="_addpictModal">
                                <?php
                                    if(empty($gambar)){
                                ?>
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('assets/gambar/Blank-profile.png');?>" id="uploadPreviewModal1" class="form-control img-responsive" style="width: auto; height: auto;">
                                            
                                            <label>Gambar <p style="color:red">(max 200kb)</p></label>

                                            <input type="file" required="" name="gambar_input[]" onchange="PreviewImage1(event);">
                                    </div>
                                <?php

                                    }else{

                                        foreach ($gambar as $key => $value) {
                                            $key++;
                                        ?>
                                            <div class="col-md-2">
                                                <img src="<?php echo base_url('uploads/'.$value->gambar_product);?>" id="uploadPreviewModal<?Php echo $key;?>" class="form-control img-responsive" style="width: auto; height: auto;">

                                                <label>Gambar <?php echo $key;?>
                                                    <p style="color:red">(max 200kb)<br>
                                                        
                                                        <label for="check<?php echo $key;?>">Ubah Gambar</label>
                                                        <input type="checkbox" name="gantigambar[<?php echo $key;?>]" title="Klik untuk ganti gambar" id="check<?php echo $key;?>" value="<?php echo $value->id;?>">
                                                        <input id="uploadImageModal<?php echo $key;?>" type="file" name="gambar_edit[<?php echo $key;?>]" onchange="PreviewImage<?php echo $key;?>(event);">
                                                        <br>
                                                        <label for="checkdel<?php echo $key;?>">Hapus Gambar</label>
                                                        <input type="checkbox" name="deletegambar[<?php echo $key;?>]" title="Klik untuk hapus gambar" value="<?php echo $value->id;?>">

                                                    </p>
                                                </label>
                                            </div>
                                        <?php
                                            
                                        }

                                    }

                                ?>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>sku</label>
                                    <input type="text"  name="sku" class="form-control" value="<?php echo $barang->sku;?>" required="">
                                    <label>Nama Barang</label>
                                    <input type="text"  name="barangnama" class="form-control" value="<?php echo $barang->barangnama;?>" required="">
                                    <label>Kategori</label>
                                    
                                    <select name="id_kategori" class="form-control" id="edit-kategori">
                                        <option value="<?php echo $barang->id_kategori;?>"><?php echo $barang->kategorinama;?></option>
                                    <?php
                                    
                                        foreach ($kategori as $key_ketagori => $value_kategori) {

                                            if($value_kategori->id != $barang->id_kategori){
                                                echo "<option value='$value_kategori->id'> $value_kategori->kategorinama </option>";
                                            }
                                        }
                                    ?>
                                    </select>
                                    <!-- <input type="text" disabled="" value="<?php echo $barang->kategorinama;?>" class="form-control">
                                    <input type="hidden" name="id_kategori" value="<?php echo $barang->id_kategori;?>"> -->
                                   
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" value="<?php echo $barang->harga;?>" min="0"  required="">
                                    <?php
                                        echo "<div class='row' id='show-sizeedit'>";
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
                                    <textarea name="Petunjukcuci" class="form-control" cols="50" rows="7" required><?php echo $barang->petunjukcuci;?></textarea>
                                    <label>Diskon</label>
                                    <?php 

                                        $disangka = !empty($barang->diskonangka) ? $barang->diskonangka : null;
                                        $dispersen = !empty($barang->diskonpersen) ? $barang->diskonpersen : null;

                                        if(!empty($dispersen)){

                                            echo '<input type="number" max="100" min="0" name="diskonpersen" id="diskonpersen" class="form-control" value="" placeholder="Persen 0 - 100%" value="'.$dispersen.'">
                                    <input type="number" name="diskonangka" min="0" id="diskonangka" class="form-control" placeholder="Masukkan angka">';

                                        }elseif (!empty($disangka)) {

                                            echo '<input type="number" max="100" min="0" name="diskonpersen" id="diskonpersen" class="form-control" value="" placeholder="Persen 0 - 100%">
                                    <input type="number" name="diskonangka" min="0" id="diskonangka" class="form-control" placeholder="Masukkan angka" value="'.$disangka.'">';
                                            
                                        }else{

                                            echo '<input type="number" max="100" min="0" name="diskonpersen" id="diskonpersen" class="form-control" value="" placeholder="Persen 0 - 100%">
                                    <input type="number" name="diskonangka" min="0" id="diskonangka" class="form-control" placeholder="Masukkan angka">';

                                        }

                                    ?>

                                    <label>Tanggal Diskon Awal</label>
                                    <input type="date" name="lim_diskon" min="<?php echo $sekarang;?>" class="form-control" value="<?php echo $barang->lim_diskon;?>" id="limdis1">
                                    <label>Tanggal Diskon Akhir</label>
                                    <input type="date" name="lim_diskon2" min="<?php echo $sekarang;?>" class="form-control" value="<?php echo $barang->lim_diskon2;?>" id="limdis2">

                                    <input type="submit" class="btn btn-success" value="Edit Barang">
                                    <input type="reset" class="btn btn-warning" value="cancel">
                                </div>
                            </div>
                            </form>


<script type="text/javascript">
    //prev image
    var PreviewImage1 = function(event) {
        var output = document.getElementById('uploadPreviewModal1');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage2 = function(event) {
        var output = document.getElementById('uploadPreviewModal2');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage3 = function(event) {
        var output = document.getElementById('uploadPreviewModal3');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage4 = function(event) {
        var output = document.getElementById('uploadPreviewModal4');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage5 = function(event) {
        var output = document.getElementById('uploadPreviewModal5');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage6 = function(event) {
        var output = document.getElementById('uploadPreviewModal6');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

        //diskon
        $("#limdis1").attr('disabled', true);
        $("#limdis2").attr('disabled', true);

    $(document).ready(function() {

    var _picture = <?php echo $jumlah_gambar;?>;

    _picture = _picture == 0 ? 1 : _picture;
        
    //append picture
        $("#appn_pictureModal").click(function(event) {
            _picture++;
            if(_picture <= 6){

             var _showPict = "<div class='col-md-4 col-lg-4 uploadPreviewModal-apn"+_picture+"'><img src='<?php echo base_url('assets/gambar/Blank-profile.png');?>' id='uploadPreviewModal"+_picture+"' class='form-control img-responsive' style='width: auto; height: auto;'><label>Gambar "+_picture+"<p style='color:red'>(max 200kb)</p></label><input id='uploadImageModal"+_picture+"' type='file' required='' name='gambar_input[]' onchange='PreviewImage"+_picture+"(event);'></div>";

                $("#_addpictModal").append(_showPict);
                    console.log("Plus"+_picture);
                    console.log(_showPict);

            }else{

                alert('Max 6 Gambar');

            }
         });

        $("#uploadPreviewModal").click(function() {
            
            $(".uploadPreviewModal-apn"+_picture).remove();

            if(_picture > <?php echo $jumlah_gambar;?>){
                _picture--;
            }else{
                _picture = <?php echo $jumlah_gambar;?>;
            }

            console.log("Min"+_picture);


        });

        //diskon
         $("#diskonpersen").keyup(function() {
             var text = $('#diskonpersen').val();

             if(text == ''){

                $("#diskonangka").removeAttr('disabled');
                $("#limdis1").attr('disabled', true);
                $("#limdis2").attr('disabled', true);

             }else{

                $("#diskonangka").attr('disabled', true);
                $("#limdis1").removeAttr('disabled');
                $("#limdis2").removeAttr('disabled');

             }
             //console.log(text);

         });

         $("#diskonangka").keyup(function() {
             var text = $('#diskonangka').val();

             if(text == ''){

                $("#diskonpersen").removeAttr('disabled');
                $("#limdis1").attr('disabled', true);
                $("#limdis2").attr('disabled', true);

             }else{

                $("#diskonpersen").attr('disabled', true);
                $("#limdis1").removeAttr('disabled');
                $("#limdis2").removeAttr('disabled');

             }

        //change log kategori
        $('#edit-kategori').change(function() {
            var sku = '<?php echo $barang->sku;?>';
            var id_kategori = $("#edit-kategori").val();

            $.ajax({
                url: '<?php echo site_url('Kategori/modal_edit_get_stok');?>',
                type: 'POST',
                data: {sku: sku , id : id_kategori},
                success: function(data){
                    $('#show-sizeedit').html(data);
                }
            })            

        });

      

    });


    //hide
    $(function () {

       
        $('#uploadImageModal1').hide();

        //show it when the checkbox is clicked
        $('#check1').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImageModal1').fadeIn();
            } else {
                 $('#uploadImageModal1').hide();
            }
        });

        $('#uploadImageModal2').hide();

        //show it when the checkbox is clicked
        $('#check2').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImageModal2').fadeIn();
            } else {
                 $('#uploadImageModal2').hide();
            }
        });

        $('#uploadImageModal3').hide();

        //show it when the checkbox is clicked
        $('#check3').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImageModal3').fadeIn();
            } else {
                 $('#uploadImageModal3').hide();
            }
        });

        $('#uploadImageModal4').hide();

        //show it when the checkbox is clicked
        $('#check4').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImageModal4').fadeIn();
            } else {
                 $('#uploadImageModal4').hide();
            }
        });

        $('#uploadImageModal5').hide();

        //show it when the checkbox is clicked
        $('#check5').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImageModal5').fadeIn();
            } else {
                 $('#uploadImageModal5').hide();
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