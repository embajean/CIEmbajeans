<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <link href='<?php echo base_url('assets/Gambar/Logo/logoemba.png');?>' rel='shortcut icon'>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/admin/');?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/admin/');?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/admin/');?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/bootstrap-progressbar-3ssbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/');?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/admin/');?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url('assets/Gambar/Logo/logoemba.png');?>" style="height: 120px; width: auto;" alt="EmbaJeans">
                            </a>
                            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo site_url('Login/Process');?>" method="post">

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    <input type='hidden' name='stt' value='admin'>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/admin/');?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/admin/');?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/admin/');?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/admin/');?>js/main.js"></script>

</body>

</html>
<!-- end document-->