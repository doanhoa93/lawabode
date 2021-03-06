<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Setting</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/settings/')?>" method="post">
                <div class="box-body">
                    <?php echo $this->session->flashdata('message');?>
                    <?php echo validation_errors(); ?>
                    <?php if(!empty($settings)):?>
                        <?php foreach($settings as $setting):?>
							<div class="form-group" style="width: 50%; float: left;padding-right: 20px">
								<label for="category_name"><?php echo $setting['key']?></label>
								<input type="text" required="required" name="settings[<?php echo $setting['key']?>]" class="form-control" placeholder="<?php echo $setting['key']?>" value="<?php echo set_value('settings[]', isset($setting['value']) ? $setting['value'] : '') ?>">
							</div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div><!-- /.box-body -->
				<div class="clearfix"></div>
                <div class="box-footer" style="margin-bottom: 50px">
					<div class="align-center">
						<button type="submit" class="btn btn-primary ">Submit</button>
						<button type="button" class="btn btn-default " onclick="javascript:history.back()">Back</button>
					</div>
                </div>
            </form>
        </div><!-- /.box -->
	</div>
</div>
