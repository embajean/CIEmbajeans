<form action="<?php echo site_url('Barang/edit_gambar');?>" method="POST" enctype="multipart/form-data">
    <div class="row" id="_addPict">
    <?php
        if(empty($gambar)){
    ?>
        <div class="col-md-4">
            <img src="<?php echo base_url('assets/gambar/Blank-profile.png');?>" id="uploadPreview1" class="form-control img-responsive" style="width: auto; height: auto;">
                
                <label>Gambar <p style="color:red">(max 200kb)</p></label>

                <input type="file" required="" name="gambar_input[]" onchange="PreviewImage1(event);">
        </div>
    <?php

        }else{

            foreach ($gambar as $key => $value) {
                $key++;
            ?>
                <div class="col-md-4">
                    <img src="<?php echo base_url('uploads/'.$value->gambar_product);?>" id="uploadPreview<?Php echo $key;?>" class="form-control img-responsive" style="width: auto; height: auto;">

                    <label>Gambar <?php echo $key;?>
                        <p style="color:red">(max 200kb)<br>
                            
                            <label for="check<?php echo $key;?>">Ubah Gambar</label>
                            <input type="checkbox" name="gantigambar[]" title="Klik untuk ganti gambar" id="check<?php echo $key;?>">
                            <input id="uploadImage<?php echo $key;?>" type="file" name="gambar_edit[]" onchange="PreviewImage<?php echo $key;?>(event);">
                            <br>
                            <label for="checkdel<?php echo $key;?>">Hapus Gambar</label>
                            <input type="checkbox" name="deletegambar[]" title="Klik untuk hapus gambar" value="<?php echo $value->id;?>">

                            <!-- <a href="#javascript(0);" title="Klik untuk hapus gambar" data-id="<?php echo $value->id;?>" id="hapus_gambar<?php echo $key;?>" style="color:red">
                                <i class="fa fa-minus-square-o"></i>
                            </a> -->
                        </p>
                    </label>
                </div>
            <?php
                
            }

        }

    ?>
        
    </div>
    <input type="submit" class="btn btn-primary" value="Tambah Data">
</form>

<script type="text/javascript">
    //prev image
    var PreviewImage1 = function(event) {
        var output = document.getElementById('uploadPreview1');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage2 = function(event) {
        var output = document.getElementById('uploadPreview2');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage3 = function(event) {
        var output = document.getElementById('uploadPreview3');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage4 = function(event) {
        var output = document.getElementById('uploadPreview4');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage5 = function(event) {
        var output = document.getElementById('uploadPreview5');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

       var PreviewImage6 = function(event) {
        var output = document.getElementById('uploadPreview6');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

    $(document).ready(function() {

    var _picture = <?php echo $jumlah_gambar;?>;

    _picture = _picture == 0 ? 1 : _picture;
        
    //append picture
        $("#appn_picture").click(function(event) {
            _picture++;
            if(_picture <= 6){

             var _showPict = "<div class='col-md-4 col-lg-4 remove-pict-apn"+_picture+"'><img src='<?php echo base_url('assets/gambar/Blank-profile.png');?>' id='uploadPreview"+_picture+"' class='form-control img-responsive' style='width: auto; height: auto;'><label>Gambar "+_picture+"<p style='color:red'>(max 200kb)</p></label><input id='uploadImage"+_picture+"' type='file' required='' name='gambar_input[]' onchange='PreviewImage"+_picture+"(event);'></div>";

                $("#_addPict").append(_showPict);
                    console.log("Plus"+_picture);
                    console.log(_showPict);

            }else{

                alert('Max 6 Gambar');

            }
         });

        $("#remove-pict").click(function() {
            
            $(".remove-pict-apn"+_picture).remove();

            if(_picture > <?php echo $jumlah_gambar;?>){
                _picture--;
            }else{
                _picture = <?php echo $jumlah_gambar;?>;
            }

            console.log("Min"+_picture);


        });



         //hapus gambar
      $('#hapus_gambar1').click(function() {
          
          var jawab =  confirm('Yakin untuk menghapus gambar ini ?');

          if(jawab==true){
            
            var hapus = false;
            if(!hapus){
                hapus = true;
                $.post('<?php echo site_url('Barang/Hapus_gambar');?>', {id :$(this).attr('data-id')},
                    function(data){
                        alert(data);
                    });

                $('#delete_gambar1').hide();
                $("#load_gambar").load('<?php echo site_url('Barang/load_gambar/'.$sku);?>');
                hapus = false;
                //_picture = <?php echo $jumlah_gambar;?>;

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
                
                $('#delete_gambar2').hide();
                $("#load_gambar").load('<?php echo site_url('Barang/load_gambar/'.$sku);?>');
                hapus = false;
                
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
                    });
                
                $('#delete_gambar3').hide();
                $("#load_gambar").load('<?php echo site_url('Barang/load_gambar/'.$sku);?>');
                
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
                    });
                
                $('#delete_gambar4').hide();
                $("#load_gambar").load('<?php echo site_url('Barang/load_gambar/'.$sku);?>');

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
                    });
                
                $('#delete_gambar5').hide();
                $("#load_gambar").load('<?php echo site_url('Barang/load_gambar/'.$sku);?>');

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
                    });
                
                $('#delete_gambar6').hide();
                $("#load_gambar").load('<?php echo site_url('Barang/load_gambar/'.$sku);?>');
                hapus = false;
            }

          }else{
                return false;
            }

      });


    });


    //hide
    $(function () {

       
        $('#uploadImage1').hide();

        //show it when the checkbox is clicked
        $('#check1').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImage1').fadeIn();
            } else {
                 $('#uploadImage1').hide();
            }
        });

        $('#uploadImage2').hide();

        //show it when the checkbox is clicked
        $('#check2').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImage2').fadeIn();
            } else {
                 $('#uploadImage2').hide();
            }
        });

        $('#uploadImage3').hide();

        //show it when the checkbox is clicked
        $('#check3').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImage3').fadeIn();
            } else {
                 $('#uploadImage3').hide();
            }
        });

        $('#uploadImage4').hide();

        //show it when the checkbox is clicked
        $('#check4').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImage4').fadeIn();
            } else {
                 $('#uploadImage4').hide();
            }
        });

        $('#uploadImage5').hide();

        //show it when the checkbox is clicked
        $('#check5').on('click', function () {
            if ($(this).prop('checked')) {
                 $('#uploadImage5').fadeIn();
            } else {
                 $('#uploadImage5').hide();
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