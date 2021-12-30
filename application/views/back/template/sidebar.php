<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <?php if($this->session->photo_thumb == NULL){ ?>
                <img src="<?php echo base_url('assets/images/noimage.jpg') ?>" alt="No Image Found">
                <?php } else{ ?>
                <img src="<?php echo base_url('assets/images/users/'.$this->session->photo_thumb) ?>"
                    alt="<?php echo $this->session->name ?>">
                <?php } ?>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?php echo $this->session->name ?></h5>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true"><i class="mdi mdi-settings"></i></a>

                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="<?php echo base_url('auth/update_profile/'.$this->session->id_users) ?>"
                        class="dropdown-item"><i class="ti-user"></i> Update Profile</a>
                    <!-- text-->
                    <a href="<?php echo base_url('auth/change_password') ?>" class="dropdown-item"><i
                            class="ti-wallet"></i> Change Pwd</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item"><i
                            class="fa fa-power-off"></i> Logout</a>
                    <!-- text-->
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-normal-cap text-center">MENU UTAMA</li>

                <?php
							  $this->db->join('menu_access', 'menu.id_menu = menu_access.menu_id');
							  $this->db->join('submenu', 'menu.id_menu = submenu.id_submenu', 'LEFT');
							  $this->db->where('menu_access.usertype_id', $this->session->usertype);
							  $this->db->where('menu.is_active', '1');
							  $this->db->group_by('menu.id_menu');
							  $this->db->order_by('menu.order_no');
							  $menu = $this->db->get('menu')->result();
							  ?>

                <?php foreach($menu as $m){ ?>
                <!-- jika menu tidak punya submenu -->
                <?php if(($m->submenu_id == NULL)){ ?>
                <li> <a class="waves-effect waves-dark " href="<?php echo base_url().$m->menu_url ?>"
                        aria-expanded="false">
                        <i class="mdi <?php echo $m->menu_icon ?>"></i><span
                            class="hide-menu"><?php echo $m->menu_name ?></span></a>
                </li>
                <?php }
								else
								{
								  $this->db->join('menu', 'submenu.id_submenu = menu.id_menu', 'LEFT');
								  $this->db->join('menu_access', 'submenu.id_submenu = menu_access.submenu_id');
								  $this->db->where('submenu.menu_id', $m->id_menu);
								  $this->db->where('menu_access.usertype_id', $this->session->usertype);
								  $this->db->order_by('submenu.order_no');
								  $submenu = $this->db->get('submenu')->result();
								?>
                <li>
                    <a class="has-arrow waves-effect waves-dark " href="#" aria-expanded="false"><i
                            class="mdi <?php echo $m->menu_icon ?>"></i><span
                            class="hide-menu"><?php echo $m->menu_name ?></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <?php foreach($submenu as $sm){ ?>
                        <li><a href="<?php echo base_url().$sm->submenu_url ?>"><i class="fa fa-circle-o"></i>
                                <?php echo $sm->submenu_name ?></a> </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php }} ?>
                <li class="nav-small-cap">SETTING &amp; WIDGETS</li>
                <?php if(is_superadmin()){ ?>
                <li> <a class="waves-effect waves-dark " href="<?php echo base_url('auth/log_list') ?>"
                        aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu">Log System
                            Process </span></a>
                <li> <a class="waves-effect waves-dark " href="<?php echo base_url('company/update/1') ?>"
                        aria-expanded="false"><i class="mdi mdi-city"></i><span class="hide-menu">Company Profile
                        </span></a>
                <li> <a class="has-arrow waves-effect waves-dark " href="#" aria-expanded="false"><i
                            class="mdi mdi-human-male-female"></i><span class="hide-menu">User Management </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('auth/create') ?>"> Add User </a></li>
                        <li><a href="<?php echo base_url('auth') ?>"> User List</a></li>
                        <li><a href="<?php echo base_url('auth/deleted_list') ?>">Deleted List</a></li>
                        <li><a href="<?php echo base_url('auth/change_password') ?>">Change Password</a></li>
                        <li><a href="<?php echo base_url('auth/update_profile/'.$this->session->id_users) ?>">Update
                                Profile</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark " href="#" aria-expanded="false"><i
                            class="mdi mdi-transit-transfer"></i><span class="hide-menu">Usertype Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('usertype/create') ?>"> Add Usertype </a></li>
                        <li><a href="<?php echo base_url('usertype') ?>"> Usertype List</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark " href="#" aria-expanded="false"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu">Menu
                            Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('menu/create') ?>"> Add Menu </a></li>
                        <li><a href="<?php echo base_url('menu') ?>"> Menu List</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark " href="#" aria-expanded="false"><i
                            class="mdi mdi-playlist-plus"></i><span class="hide-menu">SubMenu Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('submenu/create') ?>"> Add SubMenu </a></li>
                        <li><a href="<?php echo base_url('submenu') ?>"> SubMenu List</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark " href="#" aria-expanded="false"><i
                            class="mdi mdi-format-page-break"></i><span class="hide-menu">Menu Access
                            Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('menuaccess/create') ?>"> Add Menu Access</a></li>
                        <li><a href="<?php echo base_url('menuaccess') ?>"> Menu Access List</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li><a href="<?php echo base_url('auth/logout') ?>"><i class="mdi mdi-logout"></i>
                        <span>Logout</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>