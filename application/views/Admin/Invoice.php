<!-- modal -->
    <div class="modal fade" id="modal-resi" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Tambah Resi Pengiriman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    
                        <label for="resi"></label>
                        <input type="text" name="resi" class="form-control">
                        <input type="hidden" name="id" id="txt-hidden">
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Tambah Resi</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- end modal-->

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
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo site_url('Invoice');?>"><?php echo $feature;?></a></li>
                                <li><span><?php echo $nama_des;?></span></li>
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

            <!-- true main content -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="notification"><?php echo $this->session->flashdata('msg');?></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-header">
                                                List Invoice
                                            </div>
                                            <div class="panel-body" id="datatable-slider">
                                                <div class="data-tables datatable-dark">
                                                    <table id="tableInvoice" class="text-center">
                                                        <thead class="text-capitalize">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Usernama</th>
                                                                <th>Total Bayar</th>
                                                                <th>Tanggal Beli</th>
                                                                <th>Tanggal Transfer</th>
                                                                <th>Batas Bayar</th>
                                                                <th>Status</th>
                                                                <th>Bukti</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div><!-- main content -->