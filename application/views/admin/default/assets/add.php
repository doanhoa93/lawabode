<div class="row">
	<div class="col-md-12">
		 <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">New Asset</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/assets/add')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
					Please choose a image  <a href="#InsertImage" role="button" class="btn btn-default" data-toggle="modal" title="Insert Image"><i class="fa fa-picture-o"></i></a>
                </div>
            </form>
        </div><!-- /.box -->
	</div>
</div>
<script src="<?php echo $base_assets_url;?>plugins/line_control_editor/editor.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var editor = $(".txteditor").Editor();
})
    
</script>
