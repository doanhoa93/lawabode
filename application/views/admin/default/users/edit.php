<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit User</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/users/edit')?>" method="post">
                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                <div class="box-body">
                    <?php echo $this->session->flashdata('message');?>
                    <?php echo validation_errors(); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" readonly="readonly" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo set_value('username', isset($user['username']) ? $user['username'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" readonly="readonly" name="email" class="form-control" id="username" placeholder="Username" value="<?php echo set_value('email', isset($user['email']) ? $user['email'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">New Password</label>
                        <input type="password" name="password" class="form-control" id="username" placeholder="New Password" value="">
                    </div>
                    <div class="form-group">
                        <label for="username">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="username" placeholder="Confirm Password" value="">
                    </div>
                    <div class="form-group">
                        <label for="username">First  Name</label>
                        <input type="text" name="first_name" class="form-control" id="username" placeholder="First name" value="<?php echo set_value('first_name', isset($user['first_name']) ? $user['first_name'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="username" placeholder="Last name" value="<?php echo set_value('last_name', isset($user['last_name']) ? $user['last_name'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Company</label>
                        <input type="text" name="company" class="form-control" id="username" placeholder="Company" value="<?php echo set_value('company', isset($user['company']) ? $user['company'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Phone</label>
                        <input type="text" name="phone" class="form-control" id="username" placeholder="Phone" value="<?php echo set_value('phone', isset($user['phone']) ? $user['phone'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="category_active">Groups</label>
                        <?php
                            echo form_dropdown('groups[]',$groups, explode(',', $user['group_ids']),array('class' => 'form-control','multiple' => true));
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="category_active">Status</label>
                        <?php
                            echo form_dropdown('active',$user_status, isset($user['active']) ? $user['active'] : '',array('class' => 'form-control'));
                        ?>
                    </div>
					<!--<div class="form-group">
						<label for="post_status">Avatar Image</label>
						<input type="hidden" name="featured_image" value="<?php /*echo set_value('featured_image');*/?>" id="featured_image">
						<div class="preview_featured_image"></div>
						<?php /*echo set_value('email', isset($user['featured_image']) ? $user['featured_image'] : '') */?>
						<div class="set_featured_image">
							<a type="button" style="cursor:pointer" class="btnShowAssets" data-toggle="modal" data-target="#assetsModal">Set Avatar Image</a>
						</div>
					</div>-->
                </div><!-- /.box-body -->

                <div class="box-footer">
					<div class="align-center">
						<button type="submit" class="btn btn-primary button">Submit</button>
						<button type="button" class="btn btn-default button" onclick="javascript:history.back()">Back</button>
					</div>
                </div>

            </form>
        </div><!-- /.box -->
	</div>
</div>
<div class="modal fade" id="assetsModal" tabindex="-1" role="dialog" aria-labelledby="assetsModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="assetsModalLabel">Assets Manager</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<ul class="thumbnails padding-top list-unstyled" id="assetsList">

					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
	</div>
</div>
