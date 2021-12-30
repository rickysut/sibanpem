<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/') ?>images/apple-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/') ?>images/favicon.png">
    <title>SIBANPEM - Sistem Informasi Bantuan Pemerintah</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/template/front/') ?>plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/template/front/') ?>css/style-login.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/template/front/') ?>css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/front/') ?>css/hexagons.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
    .carousel-item img {
        max-height: 80vh;
        object-fit: cover;
    }

    .carousel-caption {
        left: 0;
        max-width: 100%;
        width: 100%;
        background-color: rgba(0, 15, 255, 0.5) !important;
    }

    .bgimg {
        background-image: url('<?php echo base_url() ?>assets/images/bg-right.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
    }
    </style>
</head>

<body class="fix-header card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
                        <!-- Logo icon -->
                        <h1 style="color:burlywood">SIBANPEM</h1>

                    </a>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div style="padding-top:20px"
                    class="row justify-content-center align-items-center d-flex-row text-center h-100">
                    <div>
                        <div>
                            <div>
                                <div><img style="width:100px"
                                        src="<?php echo base_url('assets/') ?>images/logo_dirjen.png" alt="user">
                                </div>
                                </br>
                                <div>
                                    <h6 style="font-size:18px">KEMENTERIAN PERTANIAN</br></br>REPUBLIK INDONESIA</h6>

                                </div>
                            </div>
                        </div>
                        <div style="padding-top:20px">
                            <div class="login-box card">
                                <div class="card-body">
                                    <?php echo validation_errors() ?>
                                    <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
                                    <?php echo form_open($action) ?>
                                    <h3 class="box-title m-b-20">Sign In</h3>
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input id="username" name="username" class="form-control" type="text"
                                                required="" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input id="password" name="password" class="form-control" type="password"
                                                required="" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 font-14">
                                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                                <input id="checkbox-signup" type="checkbox">
                                                <label for="checkbox-signup"> Remember me </label>
                                            </div>
                                            <a href="auth/forgot_password" id="to-recover" class="text-dark pull-right">
                                                <!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center m-t-20">
                                        <div class="col-xs-12">
                                            <button
                                                class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </div>

                                    <?php echo form_close() ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php $this->load->view('front/footer_front'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/template/front/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/template/front/') ?>plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/template/front/') ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/template/front/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/template/front/') ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/template/front/') ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/template/front/') ?>plugins/sticky-kit-master/dist/sticky-kit.min.js">
    </script>
    <script src="<?php echo base_url('assets/template/front/') ?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/template/front/') ?>js/custom.min.js"></script>

</body>

</html>