<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Industry</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/industries/add')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="service_name">Name</label>
                        <?php echo form_input(array('name' => 'name','class' => 'form-control', 'value' => set_value('name'))); ?>
                    </div>
					<div class="form-group">
						<label for="post_status">Featured Image</label>
						<input type="hidden" name="featured_image" value="<?php echo set_value('featured_image');?>" id="featured_image">
						<div class="preview_featured_image"></div>
						<div class="set_featured_image">
							<a type="button" style="cursor:pointer" class="btnShowAssets" data-toggle="modal" data-target="#assetsModal">Set Featured Image</a>
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
