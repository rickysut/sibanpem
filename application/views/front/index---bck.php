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
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/images/') ?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/') ?>img/favicon.png">
    <title>SiMEVI - Sistem Monitoring Evaluasi dan Pengawalan Agroindustri Hortikultura Indonesia</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/') ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/template/front/') ?>style-login.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/template/back/') ?>css/colors/blue.css" id="theme" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/front/') ?>hexagons.css">
	
	<link rel="stylesheet" href="<?= base_url('assets/template/front/')?>video.css" />
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
            width:100%;
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
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
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
						 <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url('assets/') ?>images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url('assets/') ?>images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url('assets/') ?>images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url('assets/') ?>images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-information"></i></a>
                            <div class="dropdown-menu animated slideInUp">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">Tentang Kami</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="<?php echo base_url('assets/') ?>images/logo_dirjen.png" alt="First slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">SiMEVI</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Apa Itu SiMEVI
                                                </a>
                                              </h5> </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> SiMevi adalah sebuah Sistem Informasi yang bertujuan untuk Melakukan Monitoring Evaluasi dan Pengawalan Agroindustri Hortikultura Indonesia. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Sistem Informasi Apa saja yang tergabung
                                                </a>
                                              </h5> </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Pada Prinsipnya semua Sistem Informasi yang ada di Direktorat Jenderal Hortikultura Bisa, Tapi kami baru bisa menghubungkan SiBanpem, SiMETHRIS dan SiPedas</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">Kontak Kami</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Nama Lengkap"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Pesan Anda"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">Daftar Link</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="https://www.pertanian.go.id"><i class="fa fa-check text-success"></i> Kementerian Pertanian</a></li>
                                            <li><a href="http://hortikultura.pertanian.go.id"><i class="fa fa-check text-success"></i> Ditjen Hortikultura</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                 
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/') ?>images/logo_dirjen.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url('assets/') ?>images/logo_dirjen.png" alt="user"></div>
                                            <div class="u-text">
                                                <h5>KEMENTERIAN PERTANIAN<br>REPUBLIK INDONESIA</h5>
                                                <a href="pages-profile.html" class="btn btn-success btn-sm">Direktorat Jenderal Hortikultura</a></div>
                                        </div>
                                    </li>
										<li>
											<div class="login-box card">
												<div class="card-body">
													<?php echo validation_errors() ?>
													<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
													<?php echo form_open($action) ?>
														<h3 class="box-title m-b-20">Sign In</h3>
														<div class="form-group ">
															<div class="col-xs-12">
																<input id="username" name="username" class="form-control" type="text" required="" placeholder="Username"> </div>
														</div>
														<div class="form-group">
															<div class="col-xs-12">
																<input id="password" name="password" class="form-control" type="password" required="" placeholder="Password"> </div>
														</div>
														<div class="form-group row">
															<div class="col-md-12 font-14">
																<div class="checkbox checkbox-primary pull-left p-t-0">
																	<input id="checkbox-signup" type="checkbox">
																	<label for="checkbox-signup"> Remember me </label>
																</div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?</a> </div>
														</div>
														<div class="form-group text-center m-t-20">
															<div class="col-xs-12">
																<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
															</div>
														</div>
														<div class="form-group m-b-0">
															<div class="col-sm-12 text-center">
																<div>Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a></div>
															</div>
														</div>
													<?php echo form_close() ?>
													
												</div>
											</div>
										</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">SiMEVI</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('sibanpem') ?>">SiBANPEM </a></li>
                                <li><a href="<?php echo base_url('simethris') ?>">SiMETHRIS</a></li>
                                <li><a href="http://sipedas.pertanian.go.id">SiPEDAS</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false" id="judul"><i class="mdi mdi-chevron-double-right"></i><span class="hide-menu">Sistem Monitoring Evaluasi dan Pengawalan Agroindustri Hortikultura Indonesia</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
				<div class="row page-titles">
				</div>
				<div class="row">
					<div class="col-lg-3 bgimg">
						<div class="row">
							<div class="col-12">
							<br>
								<div class="text-center db">
									<h3 class="text-themecolor">Selamat Datang</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="text-center db"><img src="<?php echo base_url('assets/') ?>images/logo_dirjen.png" width="125px"></div>
							</div>
							<div class="col-12">
							<br>
							<br>
							<div class="text-center db"><img src="<?php echo base_url('assets/') ?>images/logo-simevi.png" width="125px"></div>
							</div>
						</div>
						<div class="row kahandap">
							<div class="col-lg-12">
								<ul id="hexGrid">
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="<?php echo base_url('sibanpem') ?>" data-toggle="tooltip" data-placement="top" title="SiBANPEM">
												<img src="<?php echo base_url('assets/') ?>images/hexa/1.jpg" alt="" />
												<h1>Si</h1>
												<p>BANPEM</p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="<?php echo base_url('simethris') ?>" data-toggle="tooltip" data-placement="top" title="SiMETHRIS">
												<img src="<?php echo base_url('assets/') ?>images/hexa/2.jpg" alt="" />
												<h1>Si</h1>
												<p>METHRIS</p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#" data-toggle="tooltip" data-placement="top" title="SiPEDAS">
												<img src="<?php echo base_url('assets/') ?>images/hexa/3.jpg" alt="" />
												<h1>Si</h1>
												<p>PEDAS</p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#">
												<img src="<?php echo base_url('assets/') ?>images/hexa/4.jpg" alt="" />
												<h1></h1>
												<p></p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#">
												<img src="<?php echo base_url('assets/') ?>images/hexa/5.jpg" alt="" />
												<h1></h1>
												<p></p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#">
												<img src="<?php echo base_url('assets/') ?>images/hexa/6.jpg" alt="" />
												<h1></h1>
												<p></p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#">
												<img src="<?php echo base_url('assets/') ?>images/hexa/7.jpg" alt="" />
												<h1></h1>
												<p></p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#">
												<img src="<?php echo base_url('assets/') ?>images/hexa/6.jpg" alt="" />
												<h1></h1>
												<p></p>
											</a>
										</div>
									</li>
									<li class="hex">
										<div class="hexIn">
											<a class="hexLink" href="#">
												<img src="<?php echo base_url('assets/') ?>images/hexa/4.jpg" alt="" />
												<h1></h1>
												<p></p>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
							<div class="text-center db"><h1 class="text-themecolor">S i M E V I</h1></div>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
							<video autoplay muted loop id="myVideo">
								  <source src="<?= base_url('assets/template/front/')?>rain.mp4" type="video/mp4">
							</video>
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
            <footer class="footer">
                <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://hortikultura.pertanian.go.id">Tim Creative Hortikultura</a>
            </footer>
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
    <script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/template/back/') ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/template/back/') ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
	
</body>

</html>
