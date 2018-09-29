<!-- header logo: style can be found in header.less -->
        <header class="header">
            <a target="_blank" href="<?php echo site_url('');?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
				<?php echo $site_title;?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li id="alert_notificatoin_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="badge bg-important" style="background-color: red; color: black" id="numNotifi"></span>
                                <i class="glyphicon glyphicon-bell"></i>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <div class="notify-arrow notify-arrow-blue"></div>
                                <li  style="padding: 0px 20px">
                                    <p class="user-header" id="blue"></p>
                                </li>
                                <li id="seeAllcontacts">
                                    <a href="<?php echo site_url('admin/contacts')?>">See all contacts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $current_user['first_name'].' '.$current_user['last_name'];?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->

                                <li class="user-header bg-light-blue">
									<?php if($current_user['featured_image'] != ''):?>
										<img src="<?php echo site_url("/")?><?php echo $current_user['featured_image']?>" class="img-circle" alt="User Image" />
									<?php else:?>
										<img src="<?php echo site_url("/")?>assets/admin/default/img/avatar.png" class="img-circle" alt="User Image" />
									<?php endif;?>
                                    <p>
                                        <?php echo $current_user['first_name'].' '.$current_user['last_name'];?>
                                        <small>Registered : <?php echo date('d M Y,  H:i:s', $current_user['created_on']) ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url('users/profile')?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('signout')?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
