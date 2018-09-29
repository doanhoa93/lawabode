
<!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
						<div class="pull-left image">
							<?php if($current_user['featured_image'] != ''):?>
								<img src="<?php echo site_url("/")?><?php echo $current_user['featured_image']?>" class="img-circle" alt="User Image" />
							<?php else:?>
								<img src="<?php echo site_url("/")?>assets/admin/default/img/avatar.png" class="img-circle" alt="User Image" />
							<?php endif;?>
						</div>
						<div class="pull-left info">
								<p>
									<a href="<?php echo site_url('users/profile')?>">
										Hello, <?php echo $current_user['first_name']?>
									</a>
								</p>
								<span>
									<a href="<?php echo site_url('users/profile')?>">
										<i class="fa fa-circle text-success"></i> Online
									</a>
								</span>
                        </div>
                    </div>
                    <!-- search form -->
                    <!-- <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="<?php echo ($parent_menu == 'dashboard')? 'active' : '' ?>">
                            <a href="<?php echo site_url('admin')?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview <?php echo ($parent_menu == 'post')? 'active' : '' ?>">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Posts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" <?php echo ($parent_menu == 'post')? 'style="display:block"' : 'style="display:none"' ?>>
                                <li><a href="<?php echo site_url('admin/posts/add')?>"><i class="fa fa-angle-double-right"></i> Create news</a></li>
                                <li><a href="<?php echo site_url('admin/posts/')?>"><i class="fa fa-angle-double-right"></i> All news</a></li>

                                <li><a href="<?php echo site_url('admin/blogs/add')?>"><i class="fa fa-angle-double-right"></i> Create blogs</a></li>
                                <li><a href="<?php echo site_url('admin/blogs/')?>"><i class="fa fa-angle-double-right"></i> All blogs</a></li>
                                <?php if(in_array('admin',$current_groups)):?>
                                    <li><a href="<?php echo site_url('admin/categories')?>"><i class="fa fa-angle-double-right"></i> Categories</a></li>
                                <?php endif;?>
                            </ul>
                        </li>
                        <?php if(in_array('admin',$current_groups)):?>
                            <li class="treeview <?php echo ($parent_menu == 'user')? 'active' : '' ?>">
                                <a href="#">
                                    <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu" <?php echo ($parent_menu == 'user')? 'style="display:block"' : 'style="display:none"' ?>>
                                    <li><a href="<?php echo site_url('admin/users/')?>"><i class="fa fa-angle-double-right"></i> All Users</a></li>
                                    <li><a href="<?php echo site_url('admin/groups')?>"><i class="fa fa-angle-double-right"></i> Groups</a></li>
                                </ul>
                            </li>
                            <li class="<?php echo ($parent_menu == 'contact')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/contacts')?>">
                                    <i class="fa fa-address-card" aria-hidden="true"></i> <span>Contacts </span>
                                </a>
                            </li>
                            <li class="<?php echo ($parent_menu == 'page')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/pages')?>">
                                    <i class="fa fa-file" aria-hidden="true"></i> <span>Static Page</span>
                                </a>
                            </li>
							<li class="<?php echo ($parent_menu == 'asset')? 'active' : '' ?>">
								<a href="<?php echo site_url('admin/assets')?>">
									<i class="fa fa-cloud-upload" aria-hidden="true"></i> <span>Assets</span>
								</a>
							</li>
							<li class="<?php echo ($parent_menu == 'gallery')? 'active' : '' ?>">
								<a href="<?php echo site_url('admin/galleries')?>">
									<i class="fa fa-image" aria-hidden="true"></i> <span>Galleries</span>
								</a>
							</li>
                            <li class="<?php echo ($parent_menu == 'slider')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/sliders')?>">
                                    <i class="fa fa-sliders" aria-hidden="true"></i> <span>Slider</span>
                                </a>
                            </li>
                            <li class="<?php echo ($parent_menu == 'menu')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/menus')?>">
                                    <i class="fa fa-tasks" aria-hidden="true"></i> <span>Menus</span>
                                </a>
                            </li>
                            <li class="<?php echo ($parent_menu == 'service')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/services')?>">
                                    <i class="fa fa-truck" aria-hidden="true"></i> <span>Services</span>
                                </a>
                            </li>
                            <li class="<?php echo ($parent_menu == 'customer')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/customers')?>">
                                    <i class="fa fa-user" aria-hidden="true"></i> <span>Customer</span>
                                </a>
                            </li>
							<li class="<?php echo ($parent_menu == '')? 'active' : '' ?>">
								<a href="<?php echo site_url('admin/industries')?>">
									<i class="fa fa-industry" aria-hidden="true"></i> <span>Industries</span>
								</a>
							</li>
                            <li class="<?php echo ($parent_menu == 'setting')? 'active' : '' ?>">
                                <a href="<?php echo site_url('admin/settings')?>">
                                    <i class="fa fa-gear" aria-hidden="true"></i> <span>General Setting</span>
                                </a>
                            </li>
                        <?php endif;?>
                    </ul>
                </section>
                <!-- /.sidebar -->
