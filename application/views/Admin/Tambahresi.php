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
                	<div class="col-md-6 col-md-offset-3">
                		<form action="<?php echo site_url('Invoice/tambahResi/'.$id);?>" method="post" enctype='multipart/form-data'>
	                		<label for="no Resi">Tambah no Resi </label>
	                		<input type="text" name="resi" class="form-control">
	                		<button class="btn btn-info" type="submit">Tambah</button>
	                	</form>
                	</div>
                </div>
            </div>
</div><!-- main content -->