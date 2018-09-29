<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Reply contact</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/contacts/sendmail')?>" method="post">
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <input style="display: none" id="id" name="id" value="<?php echo set_value('id', isset($contact['id']) ? $contact['id'] : '') ?>"/>
                    <div class="form-group">
                        <label for="post_name">Name</label>
                        <input disabled="true" type="text" name="name" class="form-control" id="post_name" placeholder="name" value="<?php echo set_value('name', isset($contact['name']) ? $contact['name'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_mail_to">Mail to</label>
                        <input disabled="true" type="text" name="mail" class="form-control" id="mail" value="<?php echo set_value('email', isset($contact['email']) ? $contact['email'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_subject">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject" value="<?php echo set_value('subject', isset($contact['subject']) ? $contact['subject'] : '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_body">message</label>
                        <textarea name="message" class="form-control txteditor" id="message" placeholder="Message" rows="10"></textarea>
                    </div>
                </div>
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
        $("button:submit").click(function(){
            $('.txteditor').text($('.txteditor').Editor("getText"));
        });

        var editor = $(".txteditor").Editor();
        $('.txteditor').Editor("setText", "<?php echo !empty($post['body']) ? addslashes($post['body']) :'';?>");
    })

</script>
