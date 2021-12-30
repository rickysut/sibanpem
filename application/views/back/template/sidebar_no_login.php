<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img">
						<?php if($this->session->photo_thumb == NULL){ ?>
						  <img src="<?php echo base_url('assets/images/noimage.png') ?>" alt="No Image Found">
						<?php } else{ ?>
						  <img src="<?php echo base_url('assets/images/users/'.$this->session->photo_thumb) ?>" alt="<?php echo $this->session->name ?>">
						<?php } ?>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>DIREKTORAT JENDERAL HORTIKULTURA</h5>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="<?php echo base_url('auth/logout') ?>" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="<?php echo base_url('auth/update_profile/'.$this->session->id_users) ?>" class="dropdown-item"><i class="ti-user"></i> Update Profile</a>
                            <!-- text-->
                            <a href="<?php echo base_url('auth/change_password') ?>" class="dropdown-item"><i class="ti-wallet"></i> Change Password</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">DASHBOARD</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url() ?>">SiMEVI </a></li>
                                <li><a href="<?php echo base_url('simethris') ?>">SiMETHRIS</a></li>
                                <li><a href="#">SiPEDAS</a></li>
                                <li><a href="#">SriKANDI</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
