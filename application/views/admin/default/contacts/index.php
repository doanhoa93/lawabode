<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Contacts</h3>
            </div>
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<!--<p><?php /*echo $count*/?></p>-->
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Suject</th>
                        <th>Content</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                    <?php if(!empty($contacts)):?>
                    	<?php foreach($contacts as $contact):?>
		                    <tr>
		                        <td><?php echo $contact['id']?></td>
		                        <td><?php echo $contact['name']?></td>
		                        <td><?php echo $contact['email']?></td>
		                        <td><?php echo $contact['subject']?></td>
                                <td><?php echo $contact['content']?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/contacts/reply/'.$contact['id'])?>"><span class="badge bg-green">Reply</span></a>
		                        	<!--<a href="<?php /*echo site_url('admin/contacts/delete/'.$contact['id'])*/?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>-->
		                        </td>
		                    </tr>
                    	<?php endforeach;?>
                	<?php else:?>
                		<tr><td colspan="7">No record found</td></tr>
                	<?php endif;?>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo $pagination ?>
            </div>
        </div><!-- /.box -->
	</div>
</div>
