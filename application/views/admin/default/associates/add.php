<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Associate</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/associates/add')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo set_value('name');?>">
                    </div>
                    <div class="form-group">
                        <label for="describe_body">Describe</label>
                        <textarea name="describe" class="form-control" id="describe" placeholder="Describe" rows="6"><?php echo set_value('describe');?></textarea>
                    </div>



                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="text" name="mail" class="form-control" id="mail" placeholder="Mail" value="<?php echo set_value('mail');?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?php echo set_value('phone');?>">
                    </div>
                    <div class="form-group">
                        <label for="tel">Tel</label>
                        <input type="text" name="tel" class="form-control" id="tel" placeholder="Tel" value="<?php echo set_value('tel');?>">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" class="form-control" id="position" placeholder="Position" value="<?php echo set_value('position');?>">
                    </div>
                    <div class="form-group">
                        <label for="facebook_link">Facebook link</label>
                        <input type="text" name="facebook_link" class="form-control" id="facebook_link" placeholder="Facebook link" value="<?php echo set_value('facebook_link');?>">
                    </div>
                    <div class="form-group">
                        <label for="googleplus_link">Googleplus link</label>
                        <input type="text" name="googleplus_link" class="form-control" id="googleplus_link" placeholder="Googleplus link" value="<?php echo set_value('googleplus_link');?>">
                    </div>
                    <div class="form-group">
                        <label for="twiter_link">Twiter link</label>
                        <input type="text" name="twiter_link" class="form-control" id="twiter_link" placeholder="Twiter link" value="<?php echo set_value('twiter_link');?>">
                    </div>
                    <div class="form-group">
                        <label for="instagram_link">Instagram link</label>
                        <input type="text" name="instagram_link" class="form-control" id="instagram_link" placeholder="Instagram link" value="<?php echo set_value('instagram_link');?>">
                    </div>
                    <div class="form-group">
                        <label for="post_status">Avatar</label>
                        <input type="hidden" name="featured_image" value="<?php echo set_value('featured_image');?>" id="featured_image">
                        <div class="preview_featured_image"></div>
                        <div class="set_featured_image">
                            <a type="button" style="cursor:pointer" class="btnShowAssets" data-toggle="modal" data-target="#assetsModal">Set Avatar</a>
                        </div>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
					<div class="align-center">
						<button type="submit" class="btn btn-primary ">Submit</button>
						<button type="button" class="btn btn-default " onclick="javascript:history.back()">Back</button>
					</div>
                </div>
            </form>
        </div><!-- /.box -->
	</div>
</div>

<!-- Modal -->
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
<!-- Line Control WYSIWYG -->
<script src="<?php echo $base_assets_url;?>plugins/line_control_editor/editor.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    var editor = $(".txteditor").Editor();
})
    
</script>
