<div class="navbar-collapse">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav mr-auto mt-md-0">
        <!-- This is  -->
        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
        <!-- ============================================================== -->
        <!-- Comment -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Messages -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Messages -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown mega-dropdown"> <a
                class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-information"></i></a>
            <div class="dropdown-menu animated slideInUp">
                <ul class="mega-dropdown-menu row">
                    <li class="col-lg-3 col-xlg-2 m-b-30">
                        <h4 class="m-b-20">Tentang Kami</h4>
                        <!-- CAROUSEL -->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="container"> <img class="d-block img-fluid"
                                            src="<?php echo base_url('assets/') ?>images/logo_dirjen.png"
                                            alt="First slide"></div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> </a>
                        </div>
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
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img
                    src="<?php echo base_url('assets/') ?>images/logo_dirjen.png" alt="user" class="profile-pic" /></a>
            <div class="dropdown-menu dropdown-menu-right scale-up">
                <ul class="dropdown-user">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img"><img src="<?php echo base_url('assets/') ?>images/logo_dirjen.png"
                                    alt="user">
                            </div>
                            <div class="u-text">
                                <h6>KEMENTERIAN PERTANIAN<br>REPUBLIK INDONESIA</h6>
                                <a href="pages-profile.html" class="btn btn-success btn-sm">Direktorat
                                    Jenderal Hortikultura</a>
                            </div>
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
                                        </div> <a href="javascript:void(0)" id="to-recover"
                                            class="text-dark pull-right">
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
                                <div class="form-group m-b-0">
                                    <div class="col-sm-12 text-center">
                                        <div>Don't have an account? <a href="pages-register.html"
                                                class="text-info m-l-5"><b>Sign Up</b></a></div>
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