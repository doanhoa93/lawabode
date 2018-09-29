<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">My Profile</h3>
            </div>
            <!-- form start -->
            <?php echo form_open('users/profile');?>
                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                <div class="box-body" style="padding-left: 30px">
                    <?php echo $this->session->userdata('message');?>
                    <?php echo validation_errors(); ?>
					<div class="" style="width: 80%; float: left;padding-right: 30px">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" readonly="readonly" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo set_value('username', isset($user['username']) ? $user['username'] : '') ?>">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" readonly="readonly" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo set_value('email', isset($user['email']) ? $user['email'] : '') ?>">
						</div>
						<div class="form-group">
							<label for="password">New Password</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="New Password" value="">
						</div>
					</div>
					<div style="width: 20%; float: left;">
						<div class="form-group">
							<label for="post_status">Avatar Image</label>
							<input type="hidden" name="featured_image" value="<?php echo set_value('featured_image');?>" id="featured_image">
							<div class="preview_featured_image">
								<?php if($current_user['featured_image'] != ''):?>
									<img id="avatar" class="img-responsive thumbnail" src="<?php echo site_url("/")?><?php echo $current_user['featured_image']?>" onclick="removeFeaturedImage()" style="width:150px;height:150px;cursor:pointer">
								<?php else:?>
									<img id="avatar" class="img-responsive thumbnail" src="<?php echo site_url("/")?>assets/admin/default/img/avatar.png" onclick="removeFeaturedImage()" style="width:150px;height:150px;cursor:pointer">
								<?php endif;?>
							</div>
							<div class="set_featured_image">
								<a type="button" style="cursor:pointer" class="btnShowAssets" data-toggle="modal" data-target="#assetsModal">Set Avatar Image</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<label for="password_confirm">Confirm Password</label>
						<input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Confirm Password" value="">
					</div>
                    <div class="form-group">
                        <label for="first_name">First  Name</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name" value="<?php echo set_value('first_name', isset($user['first_name']) ? $user['first_name'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name" value="<?php echo set_value('last_name', isset($user['last_name']) ? $user['last_name'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" name="company" class="form-control" id="company" placeholder="Company" value="<?php echo set_value('company', isset($user['company']) ? $user['company'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?php echo set_value('phone', isset($user['phone']) ? $user['phone'] : '') ?>">
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
					<div class="align-center">
						<button type="submit" class="btn btn-primary ">Submit</button>
						<button type="button" class="btn btn-default " onclick="javascript:history.back()">Back</button>
					</div>
                </div>
            <?php echo form_close();?>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('.event').children('preview_featured_image').width(230);
		$('.event').children('preview_featured_image').height(230);
	})
</script>
