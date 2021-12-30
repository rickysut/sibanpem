</head>

<body class="fix-header fix-sidebar card-no-border">
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
                    <a class="navbar-brand" href="<?php echo base_url() ?>">
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
                         <img src="<?php echo base_url('assets/') ?>images/logo-light-text.png" class="light-logo" alt="homepage" /></span> 
						 <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
						 </a>
						 
                        
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
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
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
                                        <?php $this->load->view('front/about_us'); ?>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <?php $this->load->view('front/about_simevi'); ?>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <?php $this->load->view('front/contact_us'); ?>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <?php $this->load->view('front/link_list'); ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
						<div class="col-12 "><h4 class="text-white"></h5></div>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== mdi-login-variant -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-login-variant"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url('assets/images/') ?>logo_dirjen.png" alt="user" style="height: 40px;width:40px">
											</div>
                                            <div class="u-text">
                                                <h4><?php echo $this->session->name ?></h4>
                                                <p class="text-muted"<?php echo $this->session->id_users ?>></p><a href="<?php echo base_url('auth/update_profile/'.$this->session->id_users) ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
											</div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url('auth/update_profile/'.$this->session->id_users) ?>"><i class="ti-user"></i> Update Profile</a></li>
                                    <li><a href="<?php echo base_url('auth/change_password') ?>"><i class="ti-wallet"></i> Change Password</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>