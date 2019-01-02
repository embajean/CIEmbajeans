<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link href='<?php echo base_url('assets/gambar/logo/logoemba.png');?>' rel='shortcut icon'>
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

   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/DataTables/css/dataTables.bootstrap4.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/DataTables/css/query.dataTables.js');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/DataTables/css/responsive.bootstrap.min.js');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/DataTables/css/responsive.jqueryui.min.js');?>"> -->
    
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
                    <!-- <a href="index.html"><img src="<?php echo base_url('assets/gambar/somnium.png');?>" alt="logo"></a> -->
                    <a href="index.html"><img src="<?php echo base_url('assets/gambar/logo/logo.png');?>" alt="logo"></a>
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
                            <li><a href="<?php echo site_url('adminembajeans/invoice');?>"><i class="ti-receipt"></i> <span>Pembayaran</span></a></li>
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