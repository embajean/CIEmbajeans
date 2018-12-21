<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/admin/');?>assets/images/icon/favicon.ico">
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
                    <a href="index.html"><img src="<?php echo base_url('assets/gambar/somnium.png');?>" alt="logo"></a>
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
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Sidebar
                                        Types
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="index.html">Left Sidebar</a></li>
                                    <li><a href="index3-horizontalmenu.html">Horizontal Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                <ul class="collapse">
                                    <li><a href="barchart.html">bar chart</a></li>
                                    <li><a href="linechart.html">line Chart</a></li>
                                    <li><a href="piechart.html">pie chart</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                                <ul class="collapse">
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="alert.html">Alert</a></li>
                                    <li><a href="badge.html">Badge</a></li>
                                    <li><a href="button.html">Button</a></li>
                                    <li><a href="button-group.html">Button Group</a></li>
                                    <li><a href="cards.html">Cards</a></li>
                                    <li><a href="dropdown.html">Dropdown</a></li>
                                    <li><a href="list-group.html">List Group</a></li>
                                    <li><a href="media-object.html">Media Object</a></li>
                                    <li><a href="modal.html">Modal</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="popovers.html">Popover</a></li>
                                    <li><a href="progressbar.html">Progressbar</a></li>
                                    <li><a href="tab.html">Tab</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="form.html">Form</a></li>
                                    <li><a href="grid.html">grid system</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                                <ul class="collapse">
                                    <li><a href="fontawesome.html">fontawesome icons</a></li>
                                    <li><a href="themify.html">themify icons</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Tables</span></a>
                                <ul class="collapse">
                                    <li><a href="table-basic.html">basic table</a></li>
                                    <li><a href="table-layout.html">table layout</a></li>
                                    <li class="active"><a href="datatable.html">datatable</a></li>
                                </ul>
                            </li>
                            <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                                <ul class="collapse">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login2.html">Login 2</a></li>
                                    <li><a href="login3.html">Login 3</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="register2.html">Register 2</a></li>
                                    <li><a href="register3.html">Register 3</a></li>
                                    <li><a href="register4.html">Register 4</a></li>
                                    <li><a href="screenlock.html">Lock Screen</a></li>
                                    <li><a href="screenlock2.html">Lock Screen 2</a></li>
                                    <li><a href="reset-pass.html">reset password</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                                    <span>Error</span></a>
                                <ul class="collapse">
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="403.html">Error 403</a></li>
                                    <li><a href="500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#" aria-expanded="true">Item level (1)</a>
                                        <ul class="collapse">
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item level (1)</a></li>
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
                    <!-- profile info & task notification -->
                    <!-- <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div> -->
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
                            <form action="<?php echo site_url('Barang/tambah_barang');?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="#" id="uploadPreviewDepan" class="form-control img-responsive" style="width: 150px; height: 150px;">
                                        <label>Gambar Depan <p style="color:red">(max 200kb)</p></label>
                                        <input id="uploadImageDepan" type="file" required="" name="gambar_depan" onchange="PreviewImageDepan();">

                                        <img src="#" id="uploadPreviewBelakang" class="form-control img-responsive" style="width: 150px; height: 150px;">
                                        <label>Gambar Belakang <p style="color:red">(max 200kb)</p></label>
                                        <input id="uploadImageBelakang" type="file" required="" name="gambar_belakang" onchange="PreviewImageBelakang();">

                                        <img src="#" id="uploadPreviewSamping" class="form-control img-responsive" style="width: 150px; height: 150px;">
                                        <label>Gambar Samping <p style="color:red">(max 200kb)</p></label>
                                        <input id="uploadImageSamping" type="file" required="" name="gambar_samping" onchange="PreviewImageSamping();">
                                </div>
                                <div class="col-md-6">
                                    <label>SKU</label>
                                    <input type="text" name="sku" class="form-control" placeholder="SKU003" required="">
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
                                    <label>Stok</label>
                                    <input type="number" name="stok" class="form-control" value="0" required="">
                                    <label>Harga</label>
                                    <input type="number" name="harga" class="form-control" value="0" required="">
                                    <label>Ukuran</label>
                                    <input type="text" name="size" class="form-control" value="S,M,L,XL" required="">
                                    <label>Detail Size</label>
                                    <textarea name="detailsize" required class="form-control" cols="50" rows="5"></textarea>
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" required="" cols="50" rows="5"></textarea>
                                    <label>Cara Perawatan</label>
                                    <textarea name="Petunjukcuci" class="form-control" required cols="50" rows="5"></textarea>
                                    <label>Diskon</label>
                                    <input type="text" name="diskon" class="form-control" value="" placeholder="Sudah Termasuk Persen">
                                    <label>Tanggal Diskon</label>
                                    <input type="date" name="lim_diskon" class="form-control">

                                    <input type="submit" class="btn btn-success" value="Tambah Barang">
                                </div>
                            </div>
                            </form>
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
                                </h4>

                                <div class="row">
                                    <?php
                                        if($banyak_data > 0){
                                    ?>
                                            <?php
                                                foreach ($barang as $key_barang => $value_barang) {

                                                $exp = explode(PHP_EOL, $value_barang->deskripsi);
                                                $cuci = explode(PHP_EOL, $value_barang->Petunjukcuci);
                                                $ukuran = explode(PHP_EOL, $value_barang->detailsize);
                                                ?>
                                                    <div class="col-lg-3 col-md-6 mt-5">
                                                        <div class="cart card-bordered">
                                                            <img src="<?php echo base_url('uploads/'.$value_barang->gambar_depan);?>" style="height:300px; width:auto;">
                                                            <div class="card-body">
                                                                <h5 class="title"><?php echo $value_barang->barangnama;
                                                                echo "&nbsp;&nbsp;<a href='#' data-target='#modalEditbarang' data-toggle='modal'data-id='$value_barang->id' title='Ubah'><i class='fa fa-edit'></i></a>&nbsp;<a href='
                                                                ".site_url('Barang/delete_barang/'.$value->id)."'><i class='fa fa-trash'></i></a>";?></h5>
                                                                <div class="card-text">
                                                                    SKU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->SKU;?> <br>
                                                                    kategori&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->kategorinama;?> <br>
                                                                    Size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->size;?> <br>
                                                                    Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <?php echo number_format($value_barang->harga,2);?> <br>
                                                                    Stok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->stok;?> <br>
                                                                    <div id="accordion3" class="according accordion-s3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <a class="card-link" data-toggle="collapse" href="#acordesc<?php echo $value_barang->id;?>">Deskripsi</a>
                                                                            </div>
                                                                            <div id="acordesc<?php echo $value_barang->id;?>" class="collapse show" data-parent="#accordion3">
                                                                                <div class="card-body">
                                                                                    <?php
                                                                                        foreach ($exp as $key_exp => $value_exp) {
                                                                                            echo $value_exp.'<br>';
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="accordion3" class="according accordion-s3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <a class="card-link" data-toggle="collapse" href="#acorukuran<?php echo $value_barang->id;?>">Detail Ukuran</a>
                                                                            </div>
                                                                            <div id="acorukuran<?php echo $value_barang->id;?>" class="collapse show" data-parent="#accordion3">
                                                                                <div class="card-body">
                                                                                    <?php
                                                                                        foreach ($ukuran as $key_ukuran => $value_ukuran) {
                                                                                            echo $value_ukuran.'<br>';
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="accordion3" class="according accordion-s3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <a class="card-link" data-toggle="collapse" href="#acorcuci<?php echo $value_barang->id;?>">Petunjuk Cuci</a>
                                                                            </div>
                                                                            <div id="acorcuci<?php echo $value_barang->id;?>" class="collapse show" data-parent="#accordion3">
                                                                                <div class="card-body">
                                                                                    <?php
                                                                                        foreach ($cuci as $key_cuci => $value_cuci) {
                                                                                            echo $value_cuci.'<br>';
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
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
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 col-lg-offset-3 col-xs-offset-3 col-md-offset-3">
                                    <?php echo $this->pagination->create_links(); ?>
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
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/scripts.js"></script>
</body>

</html>

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

     $(document).ready(function(){
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
     });

</script>
