<?php
/*var_dump($gambar[1]->gambar_product);
die;*/
$bb = 0;
$date = date('Y-m-d');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Master Barang Embajeans</title>
    <link href='<?php echo base_url('assets/Gambar/Logo/logoemba.png');?>' rel='shortcut icon'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?php echo base_url('assets/Gambar/Logo/Logo.png');?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="<?php echo site_url('adminembajeans');?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                             <li><a href="<?php echo site_url('barang');?>" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Barang</span></a></li>
                            <li>
                            <li><a href="<?php echo site_url('Invoice');?>"><i class="ti-receipt"></i> <span>Pembayaran</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo site_url('Slider');?>">Slider Home</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Home</a></li>
                                <li><span>Master Barang</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $nama['namadepan']?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url('Login/Logout');?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <form action="<?php echo site_url('Barang/tambah_barang2');?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row" id="_addPict">
                                        <div class="col-md-4"> 
                                            <img src="<?php echo base_url('assets/Gambar/Blank-profile.png');?>" id="uploadPreview1" class="form-control img-responsive" style="width: 150px; height: 150px;">
                                            <label>Gambar <p style="color:red">(max 200kb)</p> <a href="#javascript(0);" id="appn_picture"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="#javascript(0);" id="remove-pict"><i class="fa fa-minus-circle"></i></a></label>
                                            <input id="uploadImage1" type="file" required="" name="gambar_product[]" onchange="PreviewImage1(event);">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>sku</label>
                                    <input type="text" name="sku" class="form-control" placeholder="sku003" required="">
                                    <label>Nama Barang</label>
                                    <input type="text" name="barangnama" class="form-control" value="" required="">
                                    <label>Kategori</label>
                                    <select name="id_kategori" id="pilih_kategori" class="form-control" required="">
                                        <?php
                                        echo "<option> --Silahkan Pilih--</option>";
                                            foreach ($kategori as $key => $value) {
                                                echo "<option value='$value->id'>$value->kategorinama</option>";
                                            }
                                        ?>
                                    </select>
                                    <div class="row" id="size">
                                    </div>
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" value="0" required="">
                                    <label>Warna</label>
                                    
                                    <select multiple="multiple" id="warna-select" name="warna[]" class="form-control" required="">
                                        <?php
                                               foreach ($warna as $key_warna => $value_warna) {
                                                   echo "<option value='$value_warna->warna'>  $value_warna->warna </option>";
                                               }
                                        ?>
                                    </select>
                                    <p id="warna-pilih"></p>
                                    <h6>Tahan CTRL untuk memilih warna lagi</h6>

                                </div>
                                <div class="col-md-6">
                                    <label>Detail Size</label>
                                    <textarea name="detailsize" required class="form-control" cols="50" rows="5"></textarea>
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" required="" cols="50" rows="5"></textarea>
                                    <label>Cara Perawatan</label>
                                    <textarea name="Petunjukcuci" class="form-control" required cols="50" rows="5"></textarea>
                                    <label>Diskon</label>
                                    <input type="number" max="100" min="0" name="diskonpersen" id="diskonpersen" class="form-control" value="" placeholder="Persen 0 - 100%">
                                    <input type="number" name="diskonangka" min="0" id="diskonangka" class="form-control" placeholder="Masukkan angka">
                                    <label>Tanggal Awal Diskon</label>
                                    <input type="date" name="lim_diskon" min="<?php echo $date;?>" class="form-control" id="limdis1">
                                    <label> Tanggal Akhir Diskon</label>
                                    <input type="date" name="lim_diskon2" min="<?php echo $date;?>" class="form-control" id="limdis2">

                                    <input type="submit" class="btn btn-success" value="Tambah Barang">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalkategori" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="panel panel-default">
                                    <div class="panel-header">
                                    </div>
                                    <div class="panel-body">
                                        <div id="frm-input">
                                            <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">
                                                <div class="col-md-12">
                                                    <label for="frm-kategori">Kategori</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="frm-kategori" placeholder="Celana, Jaket, kemeja" aria-describedby="inputGroupPrepend" required="">
                                                        <div class="invalid-feedback">
                                                              Masukan Kategori
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <button class="btn btn-primary" id="btn-input" >Buat Kategori</button>
                                        </div>
                                        <button class="btn btn-primary" id="btn-tambahkategori">Tambah</button>
                                        <button class="btn btn-warning" id="btn-editkategori">Ubah</button>
                                        <button class="btn btn-default" id="btn-resetkategori">Reset</button>
                                        <div class="row">
                                            <div class="col-md-12" id="listKategori">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#listKategori" role="tab" aria-controls="listKategori" aria-selected="true">Daftar Kategori</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambahkategori" role="tab" aria-controls="tambahkategori" aria-selected="false">Tambah</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="myTabContent">
                                        <div class="tab-pane fade show active" id="listKategori" role="tabpanel" aria-labelledby="home-tab">
                                            
                                        </div>
                                        <div class="tab-pane fade" id="tambahkategori" role="tabpanel" aria-labelledby="tambahkategori-tab">
                                           <form class="needs-validation" novalidate="" method="post" id="frm-input" enctype="multipart/form-data">
                                            <div class="col-md-4 mb-3">
                                                <label for="frm-kategori">Kategori</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="frm-kategori" placeholder="Celana, Jaket, kemeja" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">
                                                          Masukan Kategori
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" id="btn-input" type="submit">Buat Kategori</button>
                                           </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modalEditbarang" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Edit Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="fetched-data"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- end modal-->


            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                                <h4 class="header-title">Data Barang 
                                    <button class="btn btn-primary"><i class="fa fa-plus-circle" data-toggle="modal" data-target="#modalbarang"> Tambah barang</i></button>
                                    <button class="btn btn-primary"><i class="fa fa-plus-circle" data-toggle="modal" data-target="#modalkategori"> Kategori</i></button>
                                </h4>                               

                                <div class="row">
                                    <?php
                                        if($banyak_data > 0){
                                    ?>
                                            <?php
                                                foreach ($barang as $key_barang => $value_barang) {

                                                $exp = explode(PHP_EOL, $value_barang->deskripsi);
                                                $cuci = explode(PHP_EOL, $value_barang->petunjukcuci);
                                                $ukuran = explode(PHP_EOL, $value_barang->detailsize);
                                                ?>
                                                    <div class="col-lg-3 col-md-6 mt-5">
                                                        <div class="cart card-bordered">
                                                            <?php
                                                                if(empty($gambar[$key_barang]->gambar_product)){

                                                                    echo '<img src="'.base_url('assets/gambar/Blank-profile.png').'" style="height:300px; width:auto;">';

                                                                }else{

                                                                    echo '<img src="'.base_url('uploads/'.$gambar[$key_barang]->gambar_product).'" style="height:300px; width:auto;">';

                                                                }
                                                            ?>
                                                            
                                                            <div class="card-body">
                                                                <h5 class="title"><?php echo $value_barang->barangnama;
                                                                echo "&nbsp;&nbsp;<a href='#' data-target='#modalEditbarang' data-toggle='modal'data-id='$value_barang->id' title='Ubah'><i class='fa fa-edit'></i></a>&nbsp;";
                                                                echo "<a href='".site_url('Barang/delete_barang/'.$value_barang->id.'/'.$value_barang->sku)."' onclick='return konfirmasi()'><i class='fa fa-trash'></i></a>";
                                                                #echo "<a href='javascript:void(0);' data-id='".$value_barang->id."' id='hapus_barang".$key_barang."'></a>";
                                                                ?>
                                                                    
                                                                </h5>
                                                                <div class="card-text">
                                                                    sku &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->sku;?> <br>
                                                                    kategori&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->kategorinama;?> <br>
                                                                    Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <?php echo number_format($value_barang->harga,2);?> <br>
                                                                    Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php
                                                                        foreach ($size[$key_barang] as $key_size => $value_size) {
                                                                            echo $value_size->ukuran."(".$value_size->stok."), " ;
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                        }else{
                                            echo "TIdak ada data";
                                        }
                                    ?>
                                    <br>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-12 col-xs-12">
                                        <?php echo $link; ?>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                  
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018 Template by <a href="https://colorlib.com/wp/">Somnium</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
   
    <!-- others plugins -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/scripts.js"></script>
</body>

</html>

<script type="text/javascript">
    //color
    
    function konfirmasi(){

        tanya = confirm('Yakin hapus data ini ?');
        if(tanya == true) return true;
        else return false;

    }

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


     $(document).ready(function(){

        $("#limdis1").attr('disabled', true);
        $("#limdis2").attr('disabled', true);

         $('#listKategori').load('<?php echo site_url("Kategori/");?>');
         $("#frm-input").hide();

         //pilih warna
         $("#warna-select").change(function() {
             var warna = $("#warna-select").val();

             if(warna == null){

                $("#warna-pilih").text(null);

             }else{

                $("#warna-pilih").text(warna + ",");

             }

             

         });

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
             //console.log(text);

         });

         //apend picture
         var _picture = 1;
         $("#appn_picture").click(function(event) {
            _picture++;
            if(_picture <= 6){

             var _showPict = "<div class='col-md-4 col-lg-4 remove-pict-apn"+_picture+"'><img src='<?php echo base_url('assets/Gambar/Blank-profile.png');?>' id='uploadPreview"+_picture+"' class='form-control img-responsive' style='width: 150px; height: 150px;'><label>Gambar "+_picture+"<p style='color:red'>(max 200kb)</p></label><input id='uploadImage"+_picture+"' type='file' required name='gambar_product[]' onchange='PreviewImage"+_picture+"(event);'></div>";

                $("#_addPict").append(_showPict);
                    //console.log(_showPict);

            }else{

                alert('Max 6 Gambar');

            }
         });

         $("#remove-pict").click(function() {
             $(".remove-pict-apn"+_picture).remove();

             if(_picture > 1){

                _picture--;
             }else{
                _picture = 0;
             }

             
         });

        $("#modalEditbarang").on('show.bs.modal', function(e){
            var rowid = $(e.relatedTarget).data('id');
            //get data
            $.ajax({
                type : "POST",
                url : "<?php echo site_url('Barang/Get_barang');?>",
                data : 'rowid='+rowid,
                success : function(data){
                    $('.fetched-data').html(data);
                }
            })
        });

      $("#pilih_kategori").change(function() {
        
            var _kategori = $('#pilih_kategori').val();

            $.ajax({
                url: '<?php echo site_url('Barang/get_size_by_kategori');?>',
                type: 'POST',
                data: { _kategori: _kategori},
                 success : function(data){
                    $('#size').html(data);
                }
            })
            .done(function() {
                console.log("success");

            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            

      });

      //Kategori
      $('#btn-tambahkategori').click(function(){
            $("#frm-input").toggle('slow');
      });

      $("#btn-resetkategori").hide();

      

      /*$("#btn-editkategori").click(function() {
          
      });*/

      $('#btn-input').click(function () { 
          var kategori = $('#frm-kategori').val();
          var berat = '500';

            $.ajax({
                  type: "post",
                  url: "<?php echo site_url('Kategori/add');?>",
                  data: {kategorinama : kategori, berat: berat},
                  success: function(data) {
                      $("#listKategori").html(data);
                  }
              });

         // console.log(kategori);
      });

      

     });

</script>